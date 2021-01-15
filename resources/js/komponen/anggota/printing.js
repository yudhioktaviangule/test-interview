

export default class PrintArea{
    cetakKartu(data = { name: "", alamat: "", email: "", telepon: "" }) {
        const printArea = window.open(
            "",
            "",
            "left=0,top=0,width=480,height=320,toolbar=0,scrollbars=0,status=0"
        );
        printArea.document.write(`
            <html>
                <head>
                    <title>Kartu Anggota</title>
                </head>
                <body style='padding:2px;margin:0'>
                    <table cellpadding='0' cellspacing='0' width='420px' border='0' style='border:1px black solid;border-radius:5px;background:#c0392b;'>
                        <tr>
                            <th style='background:#c0392b;color:white;padding:15px'>
                                KARTU ANGGOTA
                            </th>
                        </tr>
                        <tr>
                            <th style='text-align:left;padding:5px;background:white;'>
                                Nama
                            </th>
                        </tr>
                        <tr>
                            <td style='background:white;padding:5px;'>
                                ${data.name}
                            </td>
                        </tr>
                        <tr>
                            <th style='text-align:left;padding:5px;background:white;'>
                                E-Mail
                            </th>
                        </tr>
                        <tr>
                            <td style='background:white;padding:5px;'>
                                ${data.email}
                            </td>
                        </tr>
                        <tr>
                            <th style='text-align:left;padding:5px;background:white;'>
                                Alamat
                            </th>
                        </tr>
                        <tr>
                            <td style='background:white;padding:5px;'>
                                ${data.alamat}
                            </td>
                        </tr>
                        <tr>
                            <th style='text-align:left;padding:5px;background:white;'>
                                Telepon
                            </th>
                        </tr>
                        <tr>
                            <td style='background:white;padding:5px;'>
                                ${data.telepon}
                            </td>
                        </tr>
                    </table>
                </body>
            </html>
        `);
        printArea.print();
    }
}