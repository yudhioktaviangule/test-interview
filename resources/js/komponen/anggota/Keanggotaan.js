
import { KeanggotaanEdit } from './Edit';
import { KeanggotaanView } from './View';


export default class Keanggotaan{
    init(){
        this._edit = new KeanggotaanEdit();
        this._view = new KeanggotaanView();
    }
}