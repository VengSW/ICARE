from flask import Flask, render_template, Response
import cv2, joblib
import numpy as np
import mediapipe as mp
from playsound import playsound 
mp_drawing = mp.solutions.drawing_utils
mp_drawing_styles = mp.solutions.drawing_styles
mp_pose = mp.solutions.pose

app = Flask(__name__)

camera = cv2.VideoCapture(0)

def gen_frames_mediapipe():  # generate frame by frame from camera
    with mp_pose.Pose(
            min_detection_confidence=0.5,
            min_tracking_confidence=0.5) as pose:
        while True:
            # Capture frame-by-frame
            success, image = camera.read()  # read the camera frame
            if not success:
                break
            else:
                image.flags.writeable = False
                image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
                results = pose.process(image)

                # Draw the pose annotation on the image.
                image.flags.writeable = True
                image = cv2.cvtColor(image, cv2.COLOR_RGB2BGR)
                mp_drawing.draw_landmarks(
                    image,
                    results.pose_landmarks,
                    mp_pose.POSE_CONNECTIONS,
                    landmark_drawing_spec=mp_drawing_styles.get_default_pose_landmarks_style())

                # get features
                image_height, image_width, _ = image.shape
                #shoulder
                left_shoulder_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_SHOULDER].x * image_width
                left_shoulder_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_SHOULDER].y * image_height
                right_shoulder_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_SHOULDER].x * image_width
                right_shoulder_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_SHOULDER].y * image_height
                #elbow
                left_elbow_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_ELBOW].x * image_width
                left_elbow_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_ELBOW].y * image_height
                right_elbow_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_ELBOW].x * image_width
                right_elbow_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_ELBOW].y * image_height
                #eye
                left_eye_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_EYE].x * image_width
                left_eye_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_EYE].y * image_height
                right_eye_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_EYE].x * image_width
                right_eye_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_EYE].y * image_height
                #nose
                nose_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.NOSE].x * image_width
                nose_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.NOSE].y * image_height

                features=[left_shoulder_x,left_shoulder_y,right_shoulder_x,right_shoulder_y,left_elbow_x,left_elbow_y,right_elbow_x,right_elbow_y,left_eye_x,left_eye_y,right_eye_x,right_eye_y,nose_x,nose_y]
                # features = [195.78203344345093,142.4919232726097,79.18068301677704,149.61445152759552,244.30592322349548,219.93617326021194,18.50079309940338,220.36345064640045,244.30592322349548,219.93617326021194,18.50079309940338,220.36345064640045,143.15378665924072,107.67299957573414]
                # features = [476.831406,371.8206033,179.8097734,370.6129534,540.0999295,637.4561323,120.8517573,624.478932,540.0999295,637.4561323,120.8517573,624.478932,328.4411974,179.1098181]
                features= np.reshape(features, (1, 14)) # reshape to 2D array; [80rows,14features]

                # Prediction
                classifier = joblib.load('classifier.pkl')
                prediction = classifier.predict(features)
                # print(prediction)

                # Output
                font = cv2.FONT_HERSHEY_SIMPLEX
                org = (15, 40)# org
                fontScale = 1# fontScale
                color = (255, 0, 0) # Blue color in BGR
                thickness = 2# Line thickness of 2 px
                if prediction == 1:
                    image = cv2.putText(image, 'Good Posture', org, font, fontScale, color, thickness, cv2.LINE_AA)
                    
                if prediction == 0:
                    image = cv2.putText(image, 'Poor Posture', org, font, fontScale, color, thickness, cv2.LINE_AA)
                    # playsound('C:/Users/User/Downloads/bell.wav')
                    # camera.release()

                ret, buffer = cv2.imencode('.jpg', image)
                frame = buffer.tobytes()
                yield (b'--frame\r\n'
                       b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')  # concat frame one by one and show result


def gen_frames():  # generate frame by frame from camera
    while True:
        # Capture frame-by-frame
        success, frame = camera.read()  # read the camera frame
        if not success:
            break
        else:
            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')  # concat frame one by one and show result


@app.route('/video_feed')
def video_feed():
    #Video streaming route. Put this in the src attribute of an img tag
    return Response(gen_frames_mediapipe(), mimetype='multipart/x-mixed-replace; boundary=frame')


@app.route('/')
def index():
    """Video streaming home page."""
    return render_template('index.html')


if __name__ == '__main__':
    app.run(debug=True)