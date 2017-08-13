<?php
    if (Auth::check()) {
        $tema = \Illuminate\Support\Facades\Auth::user()->tema;
    } else {
        $tema = \App\Tema::find(1);
    }
?>

<style>
    :root {
        --l5: {{ $tema->l5 }};
        --l4: {{ $tema->l4 }};
        --l3: {{ $tema->l3 }};
        --l2: {{ $tema->l2 }};
        --l1: {{ $tema->l1 }};
        --c0: {{ $tema->c0 }};
        --d1: {{ $tema->d1 }};
        --d2: {{ $tema->d2 }};
        --d3: {{ $tema->d3 }};
        --d4: {{ $tema->d4 }};
        --d5: {{ $tema->d5 }};
    }
</style>