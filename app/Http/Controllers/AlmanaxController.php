<?php


namespace App\Http\Controllers;

use App\Models\Almanax as Almanax;
use Illuminate\Http\Request;

// TODO: this should base on month-date instead of year-month-date
class AlmanaxController extends Controller
{
    // scrape the page to get the data.
    public function show($date)
    {
        $content = file_get_contents('http://www.krosmoz.com/en/almanax/' . $date);
        return view('almanax', ['content' => str_replace('</body></html>', '', $content)]);
    }

    //prepare a list
    public function list()
    {
        return view('almanaxlist');
    }

    // API endpoint for the "show" to call.
    public function add(Request $request)
    {
        if (Almanax::firstOrCreate(['needed_by' => $request->input('needed_by')], ['offering' => $request->input('offering')])) {
            return 'true';
        } else {
            return 'false';
        }
    }
}
