import smtplib
import email.message

def enviar_email():
    corpo_email = """ 
        <p>0lá Lira</p>
        <p>Segue meu email automático</p>
    """
    
    msg  = email.message.Message()
    msg['Subject'] = "Assunto"
    msg['From'] = 'eel2000martins@gmail.com '
    msg['To'] = 'eel2000martins@gmail.com '
    password = 'xggfanvncxmdsrqn'
    msg.add_header( 'Content-Type', 'text/html')
    msg.set_payload(corpo_email )

    s = smtplib.SMTP('smtp.gmail.com: 587')
    s.starttls()
    # Login Credentials for sending the mail
    s.login(msg['From'], password)
    s.sendmail (msg['From'], [msg['To']], msg.as_string().encode('utf-8'))
    print('Email enviado')
