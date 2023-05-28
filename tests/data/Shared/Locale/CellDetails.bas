Attribute VB_Name = "CellDetails"
Function getCellFormat(cell As Range) As String
	' Retrieve cell format string
    getCellFormat = cell.NumberFormat
End Function

Function getCellText(cell As Range)
	' Retrieve cell formatted contents
	getCellText = cell.Text
End Function

Sub resetCalculation()
    ' Turn on automatic recalculation
    Application.Calculation = xlCalculationManual
    Application.Calculation = xlCalculationAutomatic
End Sub
