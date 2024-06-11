<?php

namespace App\View\Components\Article;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $content,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $finalHtml = '';

        $json = json_decode($this->content, true);

        foreach($json as $row)
        {
            $type = $row['type'];

            if($type === 'paragraph')
            {
                $finalHtml .= "<p>{$row['data']['text']}</p>";
            }
            elseif($type === 'header')
            {
                $level = $row['data']['level'];
                $finalHtml .= "<h$level>{$row['data']['text']}</h$level>";
            }
        }

        return view('components.article.content', ['finalHtml' => $finalHtml]);
    }
}
