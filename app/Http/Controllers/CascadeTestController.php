<?php

namespace App\Http\Controllers;

use App\Models\CascadeTest;

class CascadeTestController extends Controller
{
    public function test()
    {
        // TODO 只查询最后一级的内容，有没有什么好的优化办法！！
        $like_search = function ($query) {
            return $query->where('name', 'like', '%水区%');
        };
        $res = CascadeTest::with([
            'child' => function ($query) use ($like_search) {
                return $query->whereHas('child', $like_search);
            },
            'child.child' => $like_search
            ])
            ->whereHas('child.child', $like_search)
            ->where('pid', 0)
            ->get();
        dd($res->toArray());
    }
}
