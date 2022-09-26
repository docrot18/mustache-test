
    <h2><strong>Студия Body Time поможет вам:</strong></h2>
    <? $news = [
        'news' =>[
             [
                 'title' => 'Безболезненно устранить локальные жировые отложения',
                 'class' => 'news_content_bar1',
             ],
             [
                 'title' => 'Избавиться от лишнего веса',
                 'class' => 'news_content_bar2',
                 'group' => 'news_content_group'
             ],
             [
                 'title' => 'Улучшить лимфоток, микроциркуляцию и снабжение тканей кислородом',
                 'class' => 'news_content_bar3',
                 'group' => 'news_content_group2',
             ],
             [
                 'title' => 'Улучшить состояние и упругость кожи',
                 'class' => 'news_content_bar4',
             ],
        ],
    ];
?>
<? echo $mustache -> render('news_content', $news) ?>