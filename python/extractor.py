import cv2
import mediapipe as mp
import numpy as np
import csv
import os # importing os module
from glob import glob

mp_drawing = mp.solutions.drawing_utils
mp_drawing_styles = mp.solutions.drawing_styles
mp_pose = mp.solutions.pose

# CSV Header
fieldnames = ['left_shoulder_x', 'left_shoulder_y', 'right_shoulder_x', 'right_shoulder_y','left_elbow_x', 'left_elbow_y', 'right_elbow_x', 'right_elbow_y','left_eye_x', 'left_eye_y', 'right_eye_x', 'right_eye_y','nose_x', 'nose_y','result']
csv_file_object = open('dataset.csv', 'w', encoding='UTF8', newline='')
writer = csv.DictWriter(csv_file_object, fieldnames=fieldnames)
writer.writeheader()


goodlist = glob("C:/Users/User/Desktop/pointsExtraction/images/good/*")
BG_COLOR = (192, 192, 192) # gray
with mp_pose.Pose(
    static_image_mode=True,
    model_complexity=2,
    enable_segmentation=True,
    min_detection_confidence=0.5) as pose:
  for file in goodlist:
    image = cv2.imread(file)
    image_height, image_width, _ = image.shape
    # Convert the BGR image to RGB before processing.
    results = pose.process(cv2.cvtColor(image, cv2.COLOR_BGR2RGB))

    if not results.pose_landmarks:
      continue

    annotated_image = image.copy()
    # Draw segmentation on the image.
    # To improve segmentation around boundaries, consider applying a joint
    # bilateral filter to "results.segmentation_mask" with "image".
    condition = np.stack((results.segmentation_mask,) * 3, axis=-1) > 0.1
    bg_image = np.zeros(image.shape, dtype=np.uint8)
    bg_image[:] = BG_COLOR
    annotated_image = np.where(condition, annotated_image, bg_image)

    # Draw pose landmarks on the image.
    mp_drawing.draw_landmarks(
        annotated_image,
        results.pose_landmarks,
        mp_pose.POSE_CONNECTIONS,
        landmark_drawing_spec=mp_drawing_styles.get_default_pose_landmarks_style())

    # CSV Writer
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

    writer.writerows([{
        'left_shoulder_x': left_shoulder_x,
        'left_shoulder_y': left_shoulder_y,
        'right_shoulder_x': right_shoulder_x,
        'right_shoulder_y': right_shoulder_y,

        'left_elbow_x': left_elbow_x,
        'left_elbow_y': left_elbow_y,
        'right_elbow_x': right_elbow_x,
        'right_elbow_y': right_elbow_y,

        'left_eye_x': left_elbow_x,
        'left_eye_y': left_elbow_y,
        'right_eye_x': right_elbow_x,
        'right_eye_y': right_elbow_y,

        'nose_x': nose_x,
        'nose_y': nose_y,
        'result': 1
    }])
    # Display Annotated Image
    # cv2.imshow('MediaPipe Pose', cv2.flip(annotated_image, 1))
    # if cv2.waitKey(10) & 0xFF == ord('q'):  # close dislay
    #     break
    # cv2.waitKey(0)

    # # Plot pose world landmarks.
    # mp_drawing.plot_landmarks(
    #     results.pose_world_landmarks, mp_pose.POSE_CONNECTIONS)

    # ----------------------------------------------------------------------------------------------POOR---------------------------------------------------------------------------------------------------
poorlist = glob("C:/Users/User/Desktop/pointsExtraction/images/poor/*")
BG_COLOR = (192, 192, 192) # gray
with mp_pose.Pose(
    static_image_mode=True,
    model_complexity=2,
    enable_segmentation=True,
    min_detection_confidence=0.5) as pose:
#  for idx, file in enumerate(IMAGE_FILES):
  for file2 in poorlist:
    image2 = cv2.imread(file2)
    image_height2, image_width2, _ = image2.shape
    # Convert the BGR image to RGB before processing.
    results = pose.process(cv2.cvtColor(image2, cv2.COLOR_BGR2RGB))

    if not results.pose_landmarks:
      continue

    annotated_image2 = image2.copy()
    # Draw segmentation on the image.
    # To improve segmentation around boundaries, consider applying a joint
    # bilateral filter to "results.segmentation_mask" with "image".
    condition = np.stack((results.segmentation_mask,) * 3, axis=-1) > 0.1
    bg_image = np.zeros(image2.shape, dtype=np.uint8)
    bg_image[:] = BG_COLOR
    annotated_image2 = np.where(condition, annotated_image2, bg_image)

    # Draw pose landmarks on the image.
    mp_drawing.draw_landmarks(
        annotated_image2,
        results.pose_landmarks,
        mp_pose.POSE_CONNECTIONS,
        landmark_drawing_spec=mp_drawing_styles.get_default_pose_landmarks_style())

    # CSV Writer
    #shoulder
    left_shoulder_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_SHOULDER].x * image_width2
    left_shoulder_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_SHOULDER].y * image_height2
    right_shoulder_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_SHOULDER].x * image_width2
    right_shoulder_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_SHOULDER].y * image_height2
    #elbow
    left_elbow_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_ELBOW].x * image_width2
    left_elbow_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_ELBOW].y * image_height2
    right_elbow_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_ELBOW].x * image_width2
    right_elbow_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_ELBOW].y * image_height2
    #eye
    left_eye_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_EYE].x * image_width2
    left_eye_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_EYE].y * image_height2
    right_eye_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_EYE].x * image_width2
    right_eye_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_EYE].y * image_height2
    #nose
    nose_x = results.pose_landmarks.landmark[mp_pose.PoseLandmark.NOSE].x * image_width2
    nose_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.NOSE].y * image_height2

    writer.writerows([{
        'left_shoulder_x': left_shoulder_x,
        'left_shoulder_y': left_shoulder_y,
        'right_shoulder_x': right_shoulder_x,
        'right_shoulder_y': right_shoulder_y,

        'left_elbow_x': left_elbow_x,
        'left_elbow_y': left_elbow_y,
        'right_elbow_x': right_elbow_x,
        'right_elbow_y': right_elbow_y,

        'left_eye_x': left_elbow_x,
        'left_eye_y': left_elbow_y,
        'right_eye_x': right_elbow_x,
        'right_eye_y': right_elbow_y,

        'nose_x': nose_x,
        'nose_y': nose_y,
        'result': 0
    }])
    # Display Annotated Image
    # cv2.imshow('MediaPipe Pose', cv2.flip(annotated_image2, 1))
    # if cv2.waitKey(10) & 0xFF == ord('q'):  # close dislay
    #     break