<?php


namespace App\Http\Controllers;

use App\Models\Almanax as Almanax;
use Illuminate\Http\Request;

class AlmanaxController extends Controller
{
    public function show($date)
    {
        $content = file_get_contents('http://www.krosmoz.com/en/almanax/' . $date);
        return view('almanax', ['content' => str_replace('</body></html>', '', $content)]);
    }

    public function list()
    {
        return view('almanaxlist');
    }

    public function add(Request $request)
    {
        if (Almanax::firstOrCreate(['needed_by' => $request->input('needed_by')], ['offering' => $request->input('offering')])) {
            return 'true';
        } else {
            return 'false';
        }
    }
}
