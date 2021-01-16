import DeleteAnggota from "./delete";
import PrintArea from './printing';
import AnggotaCari from './cari';

export default class Keanggotaan {
    hapus(id = "", name = "") {
        DeleteAnggota(id, name);
    }
    cetakKartu(data = { name: "", alamat: "", email: "", telepon: "" }) {
        new PrintArea().cetakKartu(data);
    }

    cari(){
        return new AnggotaCari();
    }

}
