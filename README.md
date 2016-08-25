# [emoji]

> Emoji support for Contao

This extension includes [EmojiOne™](http://emojione.com/) - the open emoji standard. To help you deal with all kinds of emotions, I recommend to use the emoji codes [cheatsheet](http://emoji.codes/) or the official [chrome extension](http://emojione.com/chrome/).

## Usage

There are 4 ways to use emoji in [Contao](https://contao.org/). 

### Shortnames
Using shortnames, like `:kissing_heart:` or `:poop:`.

### Insert tags
You can also use the `{{emoji}}` insert tag, like `{{emoji::joy}}`, `{{emoji::smiley_cat}}` or `{{emoji::heart}}`.

### Unicode
Unfortunately, there is no support for unicode emoji **in the backend** yet. To store 4 bytes emoji in the database, you would've to use at least MySQL 5.5.3 with the character set `utf8mb4`. A workaround would be to use submit/save callbacks across all tables/fields (or at least the tinyMCE ones). I don't feel like this is a good idea. If you really want to use unicode emoji, it's best to wrap them in insert tags, like `{{emoji::😄}}`;

### ASCII
Though set up, I don't know why it isn't working. :cry:

## Frontend
This extension also provides a WYSIWYG like [emoji picker](https://github.com/mervick/emojionearea) for your frontend forms. To do so, include the `j_emojionearea` template in your layout. The necessary `processFormData` hook is already setup to convert all emoji to their appropriate shortcode.

You may set the size of emoji on your own:

```
.emojione,
.emojioneemoji { height: 32px !important; }
```

