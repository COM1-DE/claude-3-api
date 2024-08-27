<?php

namespace Claude\Claude3Api\Models\Content;

class TextContent implements ContentInterface
{
    private string $text;

    private ?string $cacheControl;


    public function __construct(string $text, ?string $cacheControl = null)
    {
        $this->text = $text;
        $this->cacheControl = $cacheControl;
    }

    public function toArray(): array
    {
        $data = [
            'type' => 'text',
            'text' => $this->text,
        ];

        if($this->cacheControl !== null) {
            $data['cache_control'] = ['type' => $this->cacheControl];
        }

        return $data;
    }
}
