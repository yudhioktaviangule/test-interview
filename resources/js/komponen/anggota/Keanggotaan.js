import DeleteAnggota from "./delete";
import PrintArea from './printing';

export default class Keanggotaan {
    hapus(id = "", name = "") {
        DeleteAnggota(id, name);
    }
    cetakKartu(data = { name: "", alamat: "", email: "", telepon: "" }) {
        new PrintArea().cetakKartu(data);
    }
}
