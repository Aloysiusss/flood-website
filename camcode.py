import cv2
import numpy as np

def detect_flood(image):
    # Define the region of interest (ROI) based on provided coordinates
    x1, y1, x2, y2 = 100, 200, 300, 400  # Example: top-left and bottom-right coordinates of the ROI
    roi = image[y1:y2 + 60, x1:x2 - 120]  # Adjusted ROI to focus on the area between the vertical lines

    # Convert the ROI to grayscale
    gray_roi = cv2.cvtColor(roi, cv2.COLOR_BGR2GRAY)

    # Threshold the grayscale ROI to segment water
    _, thresholded = cv2.threshold(gray_roi, 150, 255, cv2.THRESH_BINARY)

    # Find contours in the thresholded image
    contours, _ = cv2.findContours(thresholded, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

    # Check if any contours are found (indicating water)
    if contours:
        # Calculate the percentage of white pixels (indicating water) in the ROI
        total_pixels = np.prod(thresholded.shape[:2])
        white_pixels = cv2.countNonZero(thresholded)
        water_level = (white_pixels / total_pixels) * 100

        # Determine color indicator based on water level
        color = (0, 0, 0)  # Default to black
        if water_level >= 70:
            color = (0, 0, 255)  # Red
        elif water_level >= 50:
            color = (0, 165, 255)  # Orange
        elif water_level >= 30:
            color = (0, 255, 255)  # Yellow

        # Draw color indicator in the frame
        cv2.rectangle(image, (x1, y1), (x2 - 120, y2 + 60), color, -1)

        # Draw contours around detected water areas
        cv2.drawContours(roi, contours, -1, (255, 255, 255), 2)

        # Display the water level
        cv2.putText(image, f'Water Level: {water_level:.2f}%', (x1 - 5, int((y1 + y2 + 5) / 2)), cv2.FONT_HERSHEY_SIMPLEX, 0.5, color, 2)

    # Draw the vertical rectangle
    cv2.rectangle(image, (x1, y1), (x2 - 120, y2 + 60), (0, 255, 0), 2)

    # Draw vertical lines at regular intervals to create the ruler-like frame
    num_intervals = 10
    interval_height = (y2 - y1) // num_intervals
    for i in range(num_intervals + 1):
        y = y1 + i * interval_height
        cv2.line(image, (x1 - 10, y), (x1, y), (0, 255, 0), 2)
        cv2.putText(image, str(i), (x1 - 50, y + 5), cv2.FONT_HERSHEY_SIMPLEX, 0.4, (0, 255, 0), 1)

    return image

def main():
    # Initialize the webcam
    cap = cv2.VideoCapture(0)

    while True:
        # Capture frame-by-frame
        ret, frame = cap.read()

        # Perform flood monitoring on the captured frame
        processed_frame = detect_flood(frame)

        # Display the processed frame
        cv2.imshow('Flood Monitoring', processed_frame)

        # Exit if 'q' is pressed
        if cv2.waitKey(1) & 0xFF == ord('q'):
            break

    # Release the webcam
    cap.release()
    cv2.destroyAllWindows()

if _name_ == '_main_':
    main()