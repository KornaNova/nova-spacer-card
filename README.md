# Nova Spacer Card

To use simply add like a regular card:

    composer require ideatocode/nova-spacer-card

```php
use Ideatocode\NovaSpacerCard\NovaSpacerCard;
// ...
  public function cards()
  {
    return [
      (new NovaSpacerCard)->width('full')->classes('bg-gray-800')->style('height: 1.5rem'),
    ];
  }
```

![image](https://user-images.githubusercontent.com/65734304/206809952-1270a7e5-2cbf-481c-925a-e7c2b5f76b38.png)
