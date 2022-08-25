from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib
import sys
server = smtplib.SMTP_SSL("smtp.gmail.com", 465)
msg = MIMEText("""body""")
date_event = sys.argv[3]
hod = sys.argv[1]
ename = sys.argv[2]
hod_mail = hod.replace("'", " ")
msg1 = ename.split(',')
msg2 = ' '.join(msg1)
msg = "Hello CR! there is an event " + msg2 + " on "+date_event.replace(
    "'", "")+" kindly go and visit our website GPN-Festo with Username as your email id and Password as cr123 and Add topics for competitions and suggest volnteers!!"
server.login("gpnfesto2022@gmail.com", "cdxbvhojlfrjblnl")
server.sendmail('gpnfesto2022@gmail.com', hod_mail.split(","), msg)
server.quit()
