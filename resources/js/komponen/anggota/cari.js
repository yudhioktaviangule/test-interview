
import Fetching from '../../lib/fetching';

export default class AnggotaCari{
    queryString=''
    async cari(){
        const fetch = new Fetching();
        const result = await fetch.sendGet(`/api/anggota/${ this.queryString }`);
        this.render(result)
    }
    async defaultAnggota(){
        const fetch = new Fetching();
        const result = await fetch.sendGet(`/api/anggota`);
        this.render(result)
    }
    render(results=[]){
        let html = ``
        results.map(result => {
            const {name,email,alamat,telepon,action} = result;
            html+=`
            <tr>
                <td>${name}</td>
                <td>${email}</td>
                <td>${alamat}</td>
                <td>${telepon}</td>
                <td>${action}</td>
            </tr>
            `;
        })
        $("tbody").html(html);
    }

    bindQueryString(obj){
        this.queryString = obj.val();
    }

    aktifkanPencarian(){
        this.searchAvailable(true)
    }
    matikanPencarian(){
        this.searchAvailable(false)
        this.defaultAnggota();
    }

    searchAvailable(availability=false){
        const mainCtr = $("#main-controls");
        const searchCtr = $("#search-controls")
        if(availability){
            mainCtr.hide()
            searchCtr.show()
        }else{
            mainCtr.show()
            searchCtr.hide()
        }
    }
}