

export default class PrintArea{
    cetakKartu(data = { name: "", alamat: "", email: "", telepon: "" }) {
        const printArea = window.open(
            "",
            "",
            "left=0,top=0,width=480,height=320,toolbar=0,scrollbars=0,status=0"
        );
        printArea.document.write(`
            <table width='420px' border='0'>
                <tr>
                    <th style='background:#c0392b;color:white'>
                        KARTU ANGGOTA
                    </th>
                </tr>
                <tr>
                    <th style='text-align:left'>
                        Nama
                    </th>
                </tr>
                <tr>
                    <td>
                        ${data.name}
                    </td>
                </tr>
                <tr>
                    <th style='text-align:left'>
                        E-Mail
                    </th>
                </tr>
                <tr>
                    <td>
                        ${data.email}
                    </td>
                </tr>
                <tr>
                    <th style='text-align:left'>
                        Alamat
                    </th>
                </tr>
                <tr>
                    <td>
                        ${data.alamat}
                    </td>
                </tr>
                <tr>
                    <th style='text-align:left'>
                        Telepon
                    </th>
                </tr>
                <tr>
                    <td>
                        ${data.telepon}
                    </td>
                </tr>
            </table>
        `);
        printArea.print();
    }
}