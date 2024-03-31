<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"
    xmlns:v="urn:schemas-microsoft-com:vml" lang="en">

<head>
    <link rel="stylesheet" type="text/css" hs-webfonts="true"
        href="https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="http://fonts.cdnfonts.com/css/04b30" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/rockwell-nova" rel="stylesheet">
    <link rel="icon" type="image/png" href="resource/logo.webp">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email</title>

    <style type="text/css">
        .email-container {
            background-color: #fff;
        }
        a {
            color: inherit;
            font-weight: bold;
            color: #33475b;
            z-index: 0;
        }

        h1 {
            font-size: 4.5vw;
        }

        h2 {
            font-size: 4vw;
            font-weight: 900;
        }

        h3 {
            font-size: 3vw;
        }

        .heading {
            font-size: 1.5vw;
        }

        .heading-content {
            font-size: 0.9vw;
            margin: 0;
            padding: 0;
        }

        .heading-address {
            font-size: 0.7vw;
            margin: 0;
            padding: 0;
        }

        .button {
            font-size: 1vw;
            font-weight: 200;
            letter-spacing: 1px;
            padding: 13px 20px 13px;
            outline: 0;
            border: 2px solid #47484E;
            cursor: pointer;
            position: relative;
            background-color: rgba(0, 0, 0, 0);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            text-transform: uppercase;
            transition: color 0.4s linear;
        }

        .button:hover {
            color: white;
        }

        .button::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #913175;
            z-index: -1;
            transition: 0.5s;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5,1.6,0.4,0.7);
            transform: scaleX(0);
        }

        .button:hover::before{
            transform: scaleX(1);
        }

        @media (min-width: 768px) {
            .button {
                padding: 13px 50px 13px;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
                max-width: 413px !important;
            }

            h1 {
                font-size: 2vw;
            }

            h2 {
                font-size: 1.5vw;
                font-weight: 900;
            }

            h3 {
                font-size: 1vw;
            }

            .heading {
                font-size: 0.9vw;
            }

            .heading-content {
                font-size: 0.4vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }

            .heading-address {
                font-size: 0.2vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
                max-width: 600px !important;
            }

            h1 {
                font-size: 2vw;
            }

            h2 {
                font-size: 1.5vw;
                font-weight: 900;
            }

            h3 {
                font-size: 1vw;
            }

            .heading {
                font-size: 1vw;
            }

            .heading-content {
                font-size: 0.5vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }

            .heading-address {
                font-size: 0.3vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }
        }

        /* Laptop */
        @media only screen and (min-device-width: 1200px) {
            u~div .email-container {
                max-width: 600px !important;
            }

            h1 {
                font-size: 3vw;
            }

            h2 {
                font-size: 2.5vw;
                font-weight: 900;
            }

            h3 {
                font-size: 2vw;
            }

            .heading {
                font-size: 1.3vw;
            }

            .heading-content {
                font-size: 0.8vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }

            .heading-address {
                font-size: 0.6vw;
                text-decoration: none;
                color: #33475b;
                margin: 0;
                padding: 0;
            }
        }

        .subtle-link {
            font-size: 1vw;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #CBD6E2;
        }

        .lgx-social-footer {
            font-size: 16px;
            padding: 0;
            margin-bottom: 5px;
        }

        .lgx-social-footer li {
            list-style-type: none;
            display: inline-block;
            padding: 0;
            cursor: pointer;
        }

        .lgx-social-footer li a {
            color: inherit;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
        }

        .lgx-social-footer li a img {
            font-size: 10px;
            line-height: 25px;
        }
    </style>

</head>
<body style="width: 100%; margin: 0; padding: 0 !important; font-family: 'Rockwell Nova', sans-serif; font-size: 1vw; color:#33475B; word-break:break-word">

    <div style="max-width: 600px; margin: 0 auto;" class="email-container">

        <!-- <! Banner -->
        <table role="presentation" width="100%">
            <tr>
                <td>
                    <img src="{{url('resource/header.webp')}}" width="100%" align="middle">
                </td>
            </tr>
        </table>

        <!-- <! First Row -->
        <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 10px 10px 20px 10px;">
            <tr>
                <td>
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="padding-bottom: 10px;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <td width="100%">
                                        <p style="text-align: justify; font-size: 1vw">
                                            Hai {{ $mailData['name'] }}
                                            <br>
                                            <br>

                                            Kami dengan senang hati mengundang Anda untuk bergabung dalam grup WhatsApp acara HiTech. Grup ini dibuat khusus untuk para peserta acara agar dapat berkomunikasi dan berdiskusi mengenai topik-topik menarik seputar teknologi, serta mendapatkan informasi terkait jadwal acara dan instruksi penting lainnya.
                                            <br>
                                            <br>

                                            Untuk bergabung dalam grup WhatsApp acara HiTech, silakan klik tautan berikut:
                                            <br>
                                            <br>
                                            <a href="https://chat.whatsapp.com/Jzls27ctWdR2hQLCNNmhoK" target="_blank">
                                                    <b>Grup WhatsApp</b>
                                            </a>
                                            <br>
                                            <br>
                                            Pastikan Anda telah mendaftar dalam acara HiTech terlebih dahulu sebelum bergabung ke grup.
                                            <br>
                                            <br>
                                            Di bawah ini kami lampirkan proposal sponsorship, dan surat pengantar proposal. Kami juga
                                            berharap ketersediaannya untuk menerima tawaran kerjasama dalam mempromosikan acara
                                            kami, yaitu Hi-Technology 2023. Kiranya hanya itu yang bisa saya sampaikan. Atas
                                            perhatiannya, saya ucapkan terima kasih.
                                            <br><br>

                                            Hormat kami, HMTI UDINUS.<br>
                                            <!-- [COMPANY_FULL_ADDRESS], [UNSUBSCRIBE_URL] -->
                                        </p>
                                    </td>
                                </table>
                            </td>
                        </tr>
                        <!-- 1 Column Text + Button : END -->
                    </table>
                </td>
            </tr>
        </table>

        <!-- <! Banner Row -->
        <table role="presentation" bgcolor="#120052" width="100%" style="padding: 20px 0 20px 0; text-align: center; margin-top: 20px;">
            <tr>
                <td valign="top" width="50%">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                        width="100%">
                        <tr style="text-align: center;">
                            <td>
                                <p class="heading" style="font-style: bold; color: #fff;">Contact Person</p>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td class="heading-content">
                                <a class="heading-content" href="https://wa.me/6282131047298" target="_blank" style="margin-left: 10px; color: #fff;"><i class="fa-brands fa-whatsapp"></i> +62 821-3104-7298 (Yudha)</a>
                            </td>
                        </tr>
                        <tr>
                    </table>
                </td>
                <td valign="top" width="50%" style="padding-right: 2.5em;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                        width="100%">
                        <tr>
                            <td style="text-align: center;">
                                <p class="heading" style="font-style: bold; color: #fff;">Sponsor dan Partner</p>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td class="heading-content">
                                <a class="heading-content" href="https://wa.me/6285740879323" target="_blank" style="color: #fff;"><i class="fa-brands fa-whatsapp"></i> +62 857-4087-9323 (Gata)</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td valign="top" width="100%" colspan="2" style="padding-top: 20px; text-align: center;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <center>
                            <tr style="text-align: center;">
                                <td>
                                    <p class="heading-content" style="color: #fff;">
                                        <a class="heading-content" href="https://wa.me/6285876215725" style="color: #fff;">+62 858-7621-5725</a>
                                    </p>
                                    <p class="heading-content" style="color: #fff;">
                                        &copy; <script>document.write(new Date().getFullYear())</script> HMTI UDINUS - All Rights Reserved
                                    </p>
                                </td>
                            </tr>
                        </center>
                    </table>
                </td>
            </tr>
        </table>
        <table role="presentation" width="100%" style="background-color: #120052; padding: 10px 0 10px 0;">
            <tr>
                <td align="center">
                    <p class="heading-content" style="color: #fff;">
                        <a class="heading-content" href="https://hmtiudinus.org/" style="color: #fff;">hmtiudinus.org</a>
                    </p>
                    <p class="heading-address" style="color: #fff;">
                        <a class="heading-address" href="https://goo.gl/maps/DnrPRX6KHtmGTkkP9" style="color: #fff;">[COMPANY_FULL_ADDRESS]</a>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
