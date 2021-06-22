Private Sub Workbook_Open()
    msgbox "hey there you are", ,"konfirmasi"
    msgbox "gw mau ngomongin sesuatu", ,"konfirmasi"

    Select Case msgbox("jadian yuk?", vbYesNo, "konfirmasi")
        Case vbYes
            msgbox "gajadi deh mager", ,"konfirmasi"
        Case vbNo
            msgbox "terima kasih udah jujur", ,"konfirmasi"
    End Select
End Sub