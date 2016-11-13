# [emoji]

> Emoji support for Contao

😀 😂 😍 

This extension includes [EmojiOne™](http://emojione.com/) - the open emoji standard. To help you deal with all kinds of emotions, I recommend to use the emoji codes [cheatsheet](http://emoji.codes/) or the official [chrome extension](http://emojione.com/chrome/).

## Usage

There are 4 ways to use emoji in [Contao](https://contao.org/). 

### Shortnames
Using shortnames, like `:kissing_heart:` or `:poop:`.

### Insert tags
You can also use the `{{emoji}}` insert tags, like `{{emoji::joy}}`, `{{emoji::smiley_cat}}` or `{{emoji::heart}}`.

### Unicode
To store 4 bytes emoji in the database, you need to use at least MySQL 5.5.3 with the character set `utf8mb4`. 

### ASCII
Though set up, it isn't working yet. :cry:

## Frontend
This extension also provides a WYSIWYG like [emoji picker](https://github.com/mervick/emojionearea) for your frontend forms. To do so, include the `j_emojionearea` template in your layout. The necessary `processFormData` hook is already setup to convert all emoji to their appropriate shortcode.

**Set the size**

```
.emojione,
.emojioneemoji { height: 32px !important; }
```

