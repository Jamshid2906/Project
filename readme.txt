1)pryect yuklab olingandan keyin mini_project degan baza yaratiladi.
2) mini_project baza ichida feedback, user,photo degan jadvallar bo'ladi.
3)
feedback
id => int
familiyasi => varchar(100)
ism => varchar(100)
izoh => text
email => varchar(70)
time => date

photo
id => int
title => varchar(50)
short => varchar(50)
img => varchar(50)
text => text
time => date
view => int

user

id => int 
login => varchar(30)
password => varchar(30)
user_name => varchar(70)

4) keyin user table ga admin uchun login parol kirigizilishi lozim phpmyadmindan  