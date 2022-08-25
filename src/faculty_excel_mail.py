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
    "'", "")+" this is the list of participated students https://docs.google.com/spreadsheets/d/1dq4nSWBZyVTqp0CU8iVC1wH88Py95LNRJdHaIL2J1HI/edit?resourcekey#gid=421499222")


with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    smtp.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
    smtp.send_message(msg)
