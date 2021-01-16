import axios from "axios";

export default class Fetching{
    async sendGet(url){
        const result  = await axios.get(url);
        return result.data;
    }
}