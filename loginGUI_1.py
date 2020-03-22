from tkinter import *
import sqlite3

class MainWindow:
    def __init__(self):
        self.screen = Tk()
        self.screen.geometry("400x300")
        self.username = StringVar()
        self.password = StringVar()
        self.screen.title("Login Page")
        Label(text = "Welcome to SQL", bg = "grey", width = "300", height = "2", font = ("Calibri", 13)).pack()
        Label (text = "").pack()
        Label(text = "Username").pack()
        self.username = Entry(self.screen)
        Label (text = "").pack()
        self.username.pack()
        Label(text = "Password").pack()
        self.password = Entry(self.screen)
        Label (text = "").pack()
        self.password.pack()
        Label (text = "").pack()
        Button(text = "Login", height = "2", width = "30", command = self.check).pack()
        self.screen.mainloop()

    def check(self):
        db = sqlite3.connect('C:/Users/alexa/OneDrive/Documents/CTF/SQLite3/sqlite-tools-win32-x86-3300100/login.db')
        cur = db.cursor()
        find_user = ("SELECT * FROM user WHERE username = '" + self.username.get() + "' AND password = '" + self.password.get() + "'")
        cur.execute(find_user)
        result = cur.fetchall()
        if (result):
            self.successPage()
        else:
            self.failurePage()

    def successPage(self):
        self.screen1 = Toplevel(width = "30", height = "40")
        self.screen1.geometry("400x300")
        self.screen1.title("Success")
        Label(self.screen1, text = "Congrats you made it in!", width = "300", height = "2", font = ("Calibri", 13)).pack()
        Label(self.screen1, text = "ucalgary{skjdadh}", width = "30", height = "2", font = ("Calibri", 13)).pack()

    def failurePage(self):
        self.screen1 = Toplevel(width = "30", height = "40")
        self.screen1.title("Failed to Login")
        Label(self.screen1, text = "Try again!", width = "30", height = "2", font = ("Calibri", 13)) .grid(row=1, column=0, sticky=W)

if __name__ == '__main__':
    window = MainWindow()
