import cv2
vid_cam = cv2.VideoCapture(0)

face_detector = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')

# get face id
face_id = raw_input("Enter id : ")

count = 0
while(True):

    ret, image_frame = vid_cam.read()
    #gray = cv2.cvtColor(image_frame, cv2.COLOR_BGR2GRAY)
    faces = face_detector.detectMultiScale(image_frame, 1.3, 5)
    cv2.imshow('frame', image_frame)

    for (x,y,w,h) in faces:

        cv2.rectangle(image_frame, (x,y), (x+w,y+h), (255,0,0), 2)
        count += 1

        # Save the captured image into the datasets folder
        cv2.imwrite("dataset/User." + str(face_id) + '.' + str(count) + ".jpg", image_frame[y:y+h,x:x+w])

        cv2.imshow('frame', image_frame)

    if cv2.waitKey(100) & 0xFF == ord('q'):
        break

    elif count>49:
        break

vid_cam.release()

cv2.destroyAllWindows()
