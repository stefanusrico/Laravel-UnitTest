<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function array_search_partial($arr, $keyword)
    {
        $res = [];
        foreach ($arr as $obj) {
            if (strpos($obj['name'], $keyword) !== FALSE)
                $res[] = $obj;
        }

        return $res;
    }

    protected $data_bank = '[{"id":7,"name":"Bank Aceh Syariah","code":"116","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":8,"name":"Bank Aladin Syariah","code":"947","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":9,"name":"Bank Allo Indonesia","code":"567","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":10,"name":"Bank Amar Indonesia","code":"531","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":11,"name":"Bank ANZ Indonesia","code":"61","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":12,"name":"Bank Artha Graha Internasional","code":"37","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":13,"name":"Bank Banten","code":"137","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":14,"name":"Bank BCA Syariah","code":"536","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":15,"name":"Bank Bengkulu","code":"133","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":16,"name":"Bank BJB","code":"110","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":17,"name":"Bank BJB Syariah","code":"425","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":18,"name":"Bank BNP Paribas Indonesia","code":"57","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":19,"name":"Bank BPD Bali","code":"129","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":20,"name":"Bank BPD DIY","code":"112","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":21,"name":"Bank BRK Syariah","code":"119","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":22,"name":"Bank BSG","code":"127","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":23,"name":"Bank BTPN","code":"213","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":24,"name":"Bank BTPN Syariah","code":"547","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":25,"name":"Bank Bumi Arta","code":"76","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":26,"name":"Bank Capital Indonesia","code":"54","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":27,"name":"Bank Central Asia","code":"14","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":28,"name":"Bank China Construction Bank Indonesia","code":"36","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":29,"name":"Bank CIMB Niaga","code":"22","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":30,"name":"Bank Commonwealth","code":"950","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":31,"name":"Bank CTBC Indonesia","code":"949","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":32,"name":"Bank Danamon Indonesia","code":"11","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":33,"name":"Bank DBS Indonesia","code":"46","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":34,"name":"Bank Digital BCA","code":"501","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":35,"name":"Bank DKI","code":"111","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":36,"name":"Bank Ganesha","code":"161","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":37,"name":"Bank Hibank Indonesia","code":"553","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":38,"name":"Bank HSBC Indonesia","code":"87","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":39,"name":"Bank IBK Indonesia","code":"945","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":40,"name":"Bank ICBC Indonesia","code":"164","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":41,"name":"Bank Ina Perdana","code":"513","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":42,"name":"Bank Index Selindo","code":"555","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":43,"name":"Bank Jago","code":"542","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":44,"name":"Bank Jambi","code":"115","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":45,"name":"Bank Jasa Jakarta","code":"472","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":46,"name":"Bank Jateng","code":"113","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":47,"name":"Bank Jatim","code":"114","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":48,"name":"Bank J Trust Indonesia","code":"95","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":49,"name":"Bank Kalbar","code":"123","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":50,"name":"Bank Kalsel","code":"122","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":51,"name":"Bank Kalteng","code":"125","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":52,"name":"Bank Kaltimtara","code":"124","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":53,"name":"Bank KB Bukopin","code":"441","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":54,"name":"Bank KB Bukopin Syariah","code":"521","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":55,"name":"Bank KEB Hana Indonesia","code":"484","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":56,"name":"Bank Krom Indonesia","code":"459","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":57,"name":"Bank Lampung","code":"121","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":58,"name":"Bank Maluku Malut","code":"131","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":59,"name":"Bank Mandiri","code":"8","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":60,"name":"Bank Mandiri Taspen","code":"564","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":61,"name":"Bank Maspion","code":"157","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":62,"name":"Bank Mayapada Internasional","code":"97","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":63,"name":"Bank Maybank Indonesia","code":"16","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":64,"name":"Bank Mega","code":"426","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":65,"name":"Bank Mega Syariah","code":"506","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":66,"name":"Bank Mestika Dharma","code":"151","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":67,"name":"Bank Mizuho Indonesia","code":"48","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":68,"name":"Bank MNC Internasional","code":"485","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":69,"name":"Bank Muamalat Indonesia","code":"147","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":70,"name":"Bank Multiarta Sentosa","code":"548","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":71,"name":"Bank Nagari","code":"118","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":72,"name":"Bank Nationalnobu","code":"503","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":73,"name":"Bank Negara Indonesia","code":"9","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":74,"name":"Bank Neo Commerce","code":"490","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":75,"name":"Bank NTB Syariah","code":"128","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":76,"name":"Bank NTT","code":"130","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":77,"name":"Bank OCBC NISP","code":"28","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":78,"name":"Bank of India Indonesia","code":"146","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":79,"name":"Bank Oke Indonesia","code":"526","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":80,"name":"Bank Panin","code":"19","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":81,"name":"Bank Panin Dubai Syariah","code":"517","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":82,"name":"Bank Papua","code":"132","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":83,"name":"Bank Permata","code":"13","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":84,"name":"Bank QNB Indonesia","code":"167","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":86,"name":"Bank Raya Indonesia","code":"494","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":87,"name":"Bank Resona Perdania","code":"47","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":88,"name":"Bank Sahabat Sampoerna","code":"523","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":89,"name":"Bank SBI Indonesia","code":"498","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":90,"name":"Bank Seabank Indonesia","code":"535","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":91,"name":"Bank Shinhan Indonesia","code":"152","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":92,"name":"Bank Sinarmas","code":"153","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":93,"name":"Bank Sulselbar","code":"126","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":94,"name":"Bank Sulteng","code":"134","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":95,"name":"Bank Sultra","code":"135","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":96,"name":"Bank Sumsel Babel","code":"120","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":97,"name":"Bank Sumut","code":"117","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":98,"name":"Bank Super Indonesia","code":"562","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":99,"name":"Bank Syariah Indonesia","code":"451","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":100,"name":"Bank Tabungan Negara","code":"200","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":101,"name":"Bank UOB Indonesia","code":"23","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":102,"name":"Bank Victoria Internasional","code":"566","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":103,"name":"Bank Victoria Syariah","code":"405","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":104,"name":"Bank Woori Saudara","code":"212","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"},{"id":85,"name":"Bank Rakyat Indonesia","code":"2","created_at":"2023-06-13T07:43:06.000000Z","updated_at":"2023-06-13T07:43:06.000000Z"}]';


}