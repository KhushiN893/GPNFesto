from fileinput import filename
import os
import smtplib
import sys
from email.message import EmailMessage
EMAIL_ADDRESS = "gpnfesto2022@gmail.com"
EMAIL_PASSWORD = "cdxbvhojlfrjblnl"
fac = sys.argv[1]
ename = sys.argv[2]
date_event = sys.argv[3]
fac_mail2 = fac.replace("'", " ")
msg1 = ename.split(',')
msg2 = ' '.join(msg1)
msg = EmailMessage()
msg['Subject'] = 'Mail from GPN-Festo'
msg['From'] = EMAIL_ADDRESS
msg['To'] = fac_mail2.split(",")
msg.set_content("Hello! there is an event " + msg2 + " on "+date_event.replace(
    "'", "")+" kindly visit our website GPN-Festo with your email id as Username and password as hod123 and organize your event ")
with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
    smtp.send_message(msg)
