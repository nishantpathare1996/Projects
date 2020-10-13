# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'register.ui'
#
# Created: Wed Mar 14 20:43:11 2018
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

import cv2

class Ui_RegisterWindow(object):
    def detaset(self):
        self.ack.setText("")
        id = self.rollno.text()
        if id=='':
            self.ack.setText("Enter Roll Number")
        else:    
            vid_cam = cv2.VideoCapture(0)
            face_detector = cv2.CascadeClassifier('D:/BE Project/haarcascade_frontalface_default.xml')
            # get face id
            face_id = id
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
                    cv2.imwrite("D:/BE Project/dataset/User." + str(face_id) + '.' + str(count) + ".jpg", image_frame[y:y+h,x:x+w])
                    cv2.imshow('frame', image_frame)
                if cv2.waitKey(100) & 0xFF == ord('q'):
                    break
                elif count>49:
                    self.ack.setText("")
                    self.ack.setText("Student Registered Successfully")
                    
                    break
            vid_cam.release()
            cv2.destroyAllWindows()
            
        
    def setupUi(self, MainWindow1):
        MainWindow1.setObjectName(_fromUtf8("MainWindow1"))
        MainWindow1.resize(733, 441)
        self.centralwidget = QtGui.QWidget(MainWindow1)
        self.centralwidget.setObjectName(_fromUtf8("centralwidget"))
        self.Title = QtGui.QLabel(self.centralwidget)
        self.Title.setGeometry(QtCore.QRect(190, 20, 351, 41))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(18)
        font.setBold(True)
        font.setItalic(True)
        font.setWeight(75)
        self.Title.setFont(font)
        self.Title.setObjectName(_fromUtf8("Title"))
        self.label = QtGui.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(270, 80, 201, 41))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(16)
        font.setBold(True)
        font.setWeight(75)
        self.label.setFont(font)
        self.label.setObjectName(_fromUtf8("label"))
        self.rollno = QtGui.QLineEdit(self.centralwidget)
        self.rollno.setGeometry(QtCore.QRect(360, 160, 131, 31))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.rollno.setFont(font)
        self.rollno.setObjectName(_fromUtf8("rollno"))
        self.label_2 = QtGui.QLabel(self.centralwidget)
        self.label_2.setGeometry(QtCore.QRect(240, 170, 111, 16))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        self.label_2.setFont(font)
        self.label_2.setObjectName(_fromUtf8("label_2"))
        self.register_btn = QtGui.QPushButton(self.centralwidget)
        self.register_btn.setGeometry(QtCore.QRect(310, 220, 111, 31))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(12)
        self.register_btn.setFont(font)
        self.register_btn.setObjectName(_fromUtf8("register_btn"))

        self.register_btn.clicked.connect(self.detaset)
        
        self.ack = QtGui.QLabel(self.centralwidget)
        self.ack.setGeometry(QtCore.QRect(240, 290, 271, 20))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(14)
        font.setItalic(True)
        self.ack.setFont(font)
        self.ack.setText(_fromUtf8(""))
        self.ack.setObjectName(_fromUtf8("ack"))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(12)
        
        MainWindow1.setCentralWidget(self.centralwidget)
        self.menubar = QtGui.QMenuBar(MainWindow1)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 733, 21))
        self.menubar.setObjectName(_fromUtf8("menubar"))
        MainWindow1.setMenuBar(self.menubar)
        self.statusbar = QtGui.QStatusBar(MainWindow1)
        self.statusbar.setObjectName(_fromUtf8("statusbar"))
        MainWindow1.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow1)
        QtCore.QMetaObject.connectSlotsByName(MainWindow1)

    def retranslateUi(self, MainWindow1):
        MainWindow1.setWindowTitle(_translate("MainWindow1", "MainWindow1", None))
        self.Title.setText(_translate("MainWindow1", "SMART ATTENDANCE SYSTEM", None))
        self.label.setText(_translate("MainWindow1", "Register New Student", None))
        self.label_2.setText(_translate("MainWindow1", "Roll No      :", None))
        self.register_btn.setText(_translate("MainWindow1", "Register", None))
        

if __name__ == "__main__":
    import sys
    app = QtGui.QApplication(sys.argv)
    MainWindow1 = QtGui.QMainWindow()
    ui = Ui_RegisterWindow()
    ui.setupUi(MainWindow1)
    MainWindow1.show()
    sys.exit(app.exec_())

