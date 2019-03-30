function ValidoFormen()
{
    try
    {
        var nr_indeksit = document.forms["frmRegjistro"]["nrindeksit"].value;
        var emri = document.forms["frmRegjistro"]["emri"].value;
        var mbiemri = document.forms["frmRegjistro"]["mbiemri"].value;
        var perdoruesi = document.forms["frmRegjistro"]["perdoruesi"].value;
        var fjalekalimi = document.forms["frmRegjistro"]["fjalekalimi"].value;
        var konfirmo_fjalekalimin = document.forms["frmRegjistro"]["k_fjalekalimi"].value;
        var email = document.forms["frmRegjistro"]["email"].value;
        var k_email = document.forms["frmRegjistro"]["k_email"].value;

        if ((nr_indeksit==null) || (nr_indeksit==""))
        {
            alert("Plotesoni numrin e indeksit!");
            return false;
        }
        else if ((emri==null) || (emri==""))
        {
            alert("Plotesoni emrin!");
            return false;
        }
        else if ((mbiemri==null) || (mbiemri==""))
        {
            alert("Plotesoni mbiemrin!");
            return false;
        }
        else if ((perdoruesi==null) || (perdoruesi==""))
        {
            alert("Plotesoni perdoruesin!");
            return false;
        }
        else if ((fjalekalimi==null) || (fjalekalimi==""))
        {
            alert("Plotesoni fjalekalimin!");
            return false;
        }
        else if ((konfirmo_fjalekalimin==null) || (konfirmo_fjalekalimin==""))
        {
            alert("Plotesoni fjalekalimin per konfirmim!");
            return false;
        }
        else if ((konfirmo_fjalekalimin==null) || (konfirmo_fjalekalimin==""))
        {
            alert("Plotesoni fjalekalimin per konfirmim!");
            return false;
        }
        else if ((email==null) || (email==""))
        {
            alert("Plotesoni emailin!");
            return false;
        }
        else if ((k_email==null) || (k_email==""))
        {
            alert("Plotesoni emailin per konfirmim!");
            return false;
        }
        else if (fjalekalimi != konfirmo_fjalekalimin)
        {
            alert("Fjalekalimet nuk jane te njejta!")
            return false;
        }
        else if (email != k_email)
        {
            alert("Email-at nuk jane te njejta!")
            return false;
        }
        else if (document.frmRegjistro.pajtohem.checked == false)
        {
            alert("Duhet te pajtoheni me rregullat para se te vazhdoni me regjistrimin.");
            return false;
        }
        else return true;
    }
    catch (ex)
    {
        alert(ex.message);
    }
}
