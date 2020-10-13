# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'takeAttendance.ui'
#
# Created: Wed Mar 14 23:17:45 2018
#      by: PyQt4 UI code generator 4.10
#
# WARNING! All changes made in this file will be lost!

from PyQt4 import QtCore, QtGui

try:
    _fromUtf8 = QtCore.QString.fromUtf8
except AttributeError:
    def _fromUtf8(s):
        return s

try:
    _encoding = QtGui.QApplication.UnicodeUTF8
    def _translate(context, text, disambig):
        return QtGui.QApplication.translate(context, text, disambig, _encoding)
except AttributeError:
    def _translate(context, text, disambig):
        return QtGui.QApplication.translate(context, text, disambig)

######################################################################
# Import OpenCV2 for image processing
import cv2, os
from datetime import date, datetime
import time
from PIL import Image
import sql
import numpy as np                
######################################################################




class Ui_takeAttendanceWindow(object):
    def training(self):
        # Create Local Binary Patterns Histograms for face recognization
        recognizer = cv2.face.LBPHFaceRecognizer_create()
        detector = cv2.CascadeClassifier("D:/BE Project/haarcascade_frontalface_default.xml");
        def getImagesAndLabels(path):
            imagePaths = [os.path.join(path,f) for f in os.listdir(path)] 
            faceSamples=[]
            ids = []
            for imagePath in imagePaths:
                PIL_img = Image.open(imagePath).convert('L')
                img_numpy = np.array(PIL_img,'uint8')
                # Get the image id
                id = int(os.path.split(imagePath)[-1].split(".")[1])
                faces = detector.detectMultiScale(img_numpy)
                for (x,y,w,h) in faces:
                    # Add the image to face samples
                    faceSamples.append(img_numpy[y:y+h,x:x+w])
                    # Add the ID to IDs
                    ids.append(id)
            # Pass the face array and IDs array
            return faceSamples,ids
        faces,ids = getImagesAndLabels('D:/BE Project/dataset')
        recognizer.train(faces, np.array(ids))
        recognizer.save('D:/BE Project/trainer/trainer.yml')
######################################################################
        
    def face_recognition(self):
        self.training
        # Create Local Binary Patterns Histograms for face recognization
        recognizer = cv2.face.LBPHFaceRecognizer_create()
        # Load the trained mode
        recognizer.read('D:/BE Project/trainer/trainer.yml')
        # Load prebuilt model for Frontal Face
        cascadePath = "D:/BE Project/haarcascade_frontalface_default.xml"
        # Create classifier from prebuilt model
        faceCascade = cv2.CascadeClassifier(cascadePath);
        # Set the font style
        font = cv2.FONT_HERSHEY_SIMPLEX
        #get attendance details
        subject = self.Sub.text()
        strength = int(self.ClassStrength.text())
        date=datetime.now().date()
        sql.PrepareAttendance(date, subject, strength)
        # Initialize and start the video frame capture
        cam = cv2.VideoCapture(0)
        roll_list = []
        # Loop
        t_end = time.time() + 30
        while time.time() < t_end:
            # Read the video frame
            ret, im =cam.read()
            # Convert the captured frame into grayscale
            gray = cv2.cvtColor(im, cv2.COLOR_BGR2GRAY)
            # Get all face from the video frame
            faces = faceCascade.detectMultiScale(gray, 1.2,5)
            # For each face in faces
            for(x,y,w,h) in faces:
                # Create rectangle around the face
                cv2.rectangle(im, (x-20,y-20), (x+w+20,y+h+20), (0,255,0), 4)
                id = "UNKNOWN"
                # Recognize the face belongs to which id
                id,conf = recognizer.predict(gray[y:y+h,x:x+w])
                # Check the id if exist 
                if id not in roll_list:
                    roll_list.append(id)

                # Put text describe who is in the picture
                cv2.rectangle(im, (x-22,y-90), (x+w+22, y-22), (0,255,0), -1)
                cv2.putText(im, str(id), (x,y-40), font, 2, (255,255,255), 3)
            # Display the video frame with the bounded rectangle
            cv2.imshow('im',im) 
            # If 'q' is pressed, close program
            if cv2.waitKey(10) & 0xFF == ord('q'):
                break
        # Stop the camera
        cam.release()
        # Close all windows
        cv2.destroyAllWindows()
        for id in roll_list:
            sql.MarkAttendance(id, date, subject)
            
        present, absent=sql.AckAttendance(date, subject)
        self.AttendanceDetails.setText("AttendanceDetails")
        self.Present.setText("Present Students : "+present)
        self.Absent.setText("Absent Students : "+absent)        
        
######################################################################
        
    def setupUi(self, MainWindow):
        MainWindow.setObjectName(_fromUtf8("MainWindow"))
        MainWindow.resize(731, 439)
        self.centralwidget = QtGui.QWidget(MainWindow)
        self.centralwidget.setObjectName(_fromUtf8("centralwidget"))
        self.ClassStrength = QtGui.QLineEdit(self.centralwidget)
        self.ClassStrength.setGeometry(QtCore.QRect(190, 190, 131, 31))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.ClassStrength.setFont(font)
        self.ClassStrength.setObjectName(_fromUtf8("ClassStrength"))
        self.Title = QtGui.QLabel(self.centralwidget)
        self.Title.setGeometry(QtCore.QRect(80, 20, 571, 41))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(18)
        font.setBold(True)
        font.setItalic(True)
        font.setWeight(75)
        self.Title.setFont(font)
        self.Title.setObjectName(_fromUtf8("Title"))
        self.label = QtGui.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(320, 90, 111, 41))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(16)
        font.setBold(True)
        font.setWeight(75)
        self.label.setFont(font)
        self.label.setObjectName(_fromUtf8("label"))
        self.label_2 = QtGui.QLabel(self.centralwidget)
        self.label_2.setGeometry(QtCore.QRect(60, 200, 121, 16))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.label_2.setFont(font)
        self.label_2.setObjectName(_fromUtf8("label_2"))
        self.action_btn = QtGui.QPushButton(self.centralwidget)
        self.action_btn.setGeometry(QtCore.QRect(190, 280, 121, 31))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(12)
        self.action_btn.setFont(font)
        self.action_btn.setObjectName(_fromUtf8("action_btn"))

        self.action_btn.clicked.connect(self.face_recognition)
        
        self.label_3 = QtGui.QLabel(self.centralwidget)
        self.label_3.setGeometry(QtCore.QRect(60, 240, 131, 20))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.label_3.setFont(font)
        self.label_3.setObjectName(_fromUtf8("label_3"))
        self.Sub = QtGui.QLineEdit(self.centralwidget)
        self.Sub.setGeometry(QtCore.QRect(190, 230, 131, 31))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.Sub.setFont(font)
        self.Sub.setObjectName(_fromUtf8("Sub"))
        self.AttendanceDetails = QtGui.QLabel(self.centralwidget)
        self.AttendanceDetails.setGeometry(QtCore.QRect(450, 180, 161, 20))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        font.setBold(True)
        font.setItalic(False)
        font.setWeight(75)
        self.AttendanceDetails.setFont(font)
        self.AttendanceDetails.setObjectName(_fromUtf8("AttendanceDetails"))
        self.Present = QtGui.QLabel(self.centralwidget)
        self.Present.setGeometry(QtCore.QRect(450, 230, 201, 20))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        font.setBold(False)
        font.setItalic(False)
        font.setWeight(50)
        self.Present.setFont(font)
        self.Present.setObjectName(_fromUtf8("cc"))
        self.Absent = QtGui.QLabel(self.centralwidget)
        self.Absent.setGeometry(QtCore.QRect(450, 280, 201, 20))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        font.setItalic(False)
        self.Absent.setFont(font)
        self.Absent.setObjectName(_fromUtf8("Absent"))
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtGui.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 731, 21))
        self.menubar.setObjectName(_fromUtf8("menubar"))
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtGui.QStatusBar(MainWindow)
        self.statusbar.setObjectName(_fromUtf8("statusbar"))
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow", None))
        self.Title.setText(_translate("MainWindow", "STUDENT ATTENDANCE MANAGEMENT SYSTEM", None))
        self.label.setText(_translate("MainWindow", "Attendance", None))
        self.label_2.setText(_translate("MainWindow", "Class Strength :", None))
        self.action_btn.setText(_translate("MainWindow", "Take Attendance", None))
        self.label_3.setText(_translate("MainWindow", "Enter Subject  :", None))
        self.AttendanceDetails.setText(_translate("MainWindow", "Attendance Details", None))
        self.Present.setText(_translate("MainWindow", "Present Students : -", None))
        self.Absent.setText(_translate("MainWindow", "Absent Students : -", None))


if __name__ == "__main__":
    import sys
    app = QtGui.QApplication(sys.argv)
    MainWindow = QtGui.QMainWindow()
    ui = Ui_takeAttendanceWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())

