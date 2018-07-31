from webbrowser import open_new_tab

fechaInicial = "2014-03-01"
horaInicial = "0:00:00"
formateadaInicial = fechaInicial + "%20" + horaInicial

fechaFinal = "2016-03-09"
horaFinal = "0:00:00"
formateadaFinal = fechaFinal + "%20" + horaFinal

url = "http://w2k12xpoc/ReportServer/Pages/ReportViewer.aspx?/ReportExpert/Dashboard&rs:ClearSession=true&rc:Parameters=false&rc:Toolbar=true&rc:LinkTarget=frameContent&RptParameterSetId=11&RptParameterSet=11%7C3%7C-1%7C0%7C101%7C1%7Ctrue%7C-2%7C1%7C100%7C1%7Ctrue%7C-3%7C2%7C8%7C0%7Ctrue%7C0%7C0%7C1%7C-1%7C1%7Cfalse%7C" + formateadaInicial + "%7C" + formateadaFinal + "%7C%7C%7C%7C0%7C--%20All%20--%7Cfalse%7C0%7C0%7C1%7Ctn:Default%7C"

open_new_tab(url)