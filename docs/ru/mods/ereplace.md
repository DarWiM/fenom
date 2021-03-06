Модификатор ereplace
=================

Выполняет поиск и замену по регулярному выражению.
[Подробнее](http://www.php.net/manual/ru/reference.pcre.pattern.syntax.php) о регулярных выражениях.

```
{$string|ereplace:$pattern:$replacement}
```

Выполняет поиск совпадений в строке `$subject` с шаблоном pattern и заменяет их на replacement.

`$replacement` может содержать ссылки вида `\n`, `$n` или `${n}`, причем последний вариант предпочтительней.
Каждая такая ссылка будет заменена на подстроку, соответствующую n-ой подмаске. n может принимать значения от 0 до 99,
причем ссылка `\0` (либо $0) соответствует вхождению всего шаблона.
Подмаски нумеруются слева направо, начиная с единицы. Для использования обратного слэша, его необходимо продублировать.


```smarty
{var $string = 'April 15, 2014'}

{$string|ereplace:'/(\w+) (\d+), (\d+)/i':'${1}1, $3'} {* April1, 2014 *}
```

**Замечание:** воизбежание скрытых ошибок при выполнении сущностей регулярные выражения стоит помещать в одинарные кавычки.
