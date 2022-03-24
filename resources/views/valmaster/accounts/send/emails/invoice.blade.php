<!DOCTYPE html>
<html>
<head>
    <title>Sherwood Greene</title>
</head>
<body style="background-color:grey">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white" style="border:2px solid black">
    <tbody>
    <tr>
        <td align="center">
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="col-550" width="550">
                <tbody>
                <tr>
                    <td align="center"
                        style="background-color: #4cb96b; height: 50px;">

                        <img height="40" src="{{asset('logo/SG Logo.png')}}" alt="Image" width="60" />
                        <p style="color:white;
                                               font-weight:bold;"> {{ $title }}</p>

                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr style="display: inline-block;">
        <td style="height: 150px; padding: 20px; border: none; border-bottom: 2px solid #361B0E; background-color: white;">

            <h2 style="text-align: left; align-items: center;">
                Dear Customer,
            </h2>
            <p class="data" style="text-align: justify-all; align-items: center; font-size: 15px; padding-bottom: 12px;">
               Please find attached the Invoice for the valuation of your property.
            </p>

        </td>
    </tr>
    <tr style="border: none; background-color: #4cb96b; height: 40px; color:white; padding-bottom: 20px; text-align: center;">

        <td height="40px"
            align="center">
            <p style="color:white; line-height: 1.5em;">{{$title}}</p>
        </td>
    </tr>
    <tr>
        <td style="font-family:'Open Sans', Arial, sans-serif;
                   font-size:11px; line-height:18px;
                   color:#999999;"
            valign="top"
            align="center">
            <p> Kind Regards</p>
        </td>
    </tr>
    </tbody>
    </tr>
    </tbody>
</table>
</body>
</html>

