# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'home.ui'
#
# Created: Wed Mar 14 20:42:54 2018
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

import register
import takeAttendance
class Ui_MainWindow(object):
    def open_register(self):
        self.window=QtGui.QMainWindow()
        self.ui = register.Ui_RegisterWindow()
        self.ui.setupUi(self.window)
        self.window.show()
    def open_takeAttendance(self):
        self.window=QtGui.QMainWindow()
        self.ui = takeAttendance.Ui_takeAttendanceWindow()
        self.ui.setupUi(self.window)
        self.window.show()   
    def setupUi(self, MainWindow):
        MainWindow.setObjectName(_fromUtf8("MainWindow"))
        MainWindow.resize(735, 441)
        self.centralwidget = QtGui.QWidget(MainWindow)
        self.centralwidget.setObjectName(_fromUtf8("centralwidget"))
        self.Title = QtGui.QLabel(self.centralwidget)
        self.Title.setGeometry(QtCore.QRect(80, 40, 571, 41))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(18)
        font.setBold(True)
        font.setItalic(True)
        font.setWeight(75)
        self.Title.setFont(font)
        self.Title.setObjectName(_fromUtf8("Title"))
        self.register_2 = QtGui.QPushButton(self.centralwidget)
        self.register_2.setGeometry(QtCore.QRect(130, 170, 171, 81))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(16)
        font.setBold(True)
        font.setWeight(75)
        self.register_2.setFont(font)
        self.register_2.setObjectName(_fromUtf8("register_2"))

        self.register_2.clicked.connect(self.open_register)
        
        self.attendance = QtGui.QPushButton(self.centralwidget)
        self.attendance.setGeometry(QtCore.QRect(430, 170, 171, 81))
        font = QtGui.QFont()
        font.setFamily(_fromUtf8("Times New Roman"))
        font.setPointSize(16)
        font.setBold(True)
        font.setWeight(75)
        self.attendance.setFont(font)
        self.attendance.setObjectName(_fromUtf8("attendance"))

        self.attendance.clicked.connect(self.open_takeAttendance)
        
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtGui.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 735, 21))
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
        self.register_2.setText(_translate("MainWindow", "REGISTER", None))
        self.attendance.setText(_translate("MainWindow", "ATTENDANCE", None))


if __name__ == "__main__":
    import sys
    app = QtGui.QApplication(sys.argv)
    MainWindow = QtGui.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())

