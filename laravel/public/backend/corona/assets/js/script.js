(function ($) {
    'use strict';

    $(function () {
        $(".richtext").summernote({
            fontNames: [
                'GraphikBold',
                'GraphikRegular',
                'Poppins-Bold',
                'Poppins-Medium',
                'Poppins-Regular',
                'DMSans-Bold-Italic',
                'DMSans-Bold',
                'DMSans-Regular-Italic',
                'DMSans-Regular',
                'IBMPlexMono-Bold',
                'IBMPlexMono-Italic',
                'IBMPlexMono-Light',
                'IBMPlexMono-Regular',
                'SourceSerif4Variable-Italic',
                'SourceSerif4Variable-Roman',
                'Caveat',
                'Delicious Handrawn',
                'Golos Text',
                'Handlee',
                'Indie Flower',
                'Montserrat',
                'Nanum Pen Script',
                'Oswald',
                'Satisfy',
                'Sriracha',
                'Sue Ellen Francisco',
                'Roboto',
            ],
            fontNamesIgnoreCheck: [
                'GraphikBold',
                'GraphikRegular',
                'Poppins-Bold',
                'Poppins-Medium',
                'Poppins-Regular',
                'DMSans-Bold-Italic',
                'DMSans-Bold',
                'DMSans-Regular-Italic',
                'DMSans-Regular',
                'IBMPlexMono-Bold',
                'IBMPlexMono-Italic',
                'IBMPlexMono-Light',
                'IBMPlexMono-Regular',
                'SourceSerif4Variable-Italic',
                'SourceSerif4Variable-Roman',
                'Caveat',
                'Delicious Handrawn',
                'Golos Text',
                'Handlee',
                'Indie Flower',
                'Montserrat',
                'Nanum Pen Script',
                'Oswald',
                'Satisfy',
                'Sriracha',
                'Sue Ellen Francisco',
                'Roboto',
            ],
            fontSizeUnits: ['%', 'px', 'pt'],
            fontSizes: ['8','9','10','11','12','14','15','16','18','20','22','24','25','28','30','32','35','40','45','60','70','75','80','100'],
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
            height: 300,
            minHeight: 200,
            toolbar: [
                [
                    'Insert',
                    [
                        'picture',
                        'link',
                        'video',
                        'table',
                        'hr'
                    ]
                ],
                [
                    'FontStyle',
                    [
                        'fontname',
                        'fontsize',
                        'fontsizeunit',
                        'color',
                        /* 'forecolor',
                        'backcolor', */
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        'superscript',
                        'subscript',
                        'clear'
                    ]
                ],
                [
                    'Paragraphstyle',
                    [
                        'style',
                        'ol',
                        'ul',
                        'paragraph',
                        'height'
                    ]
                ],
                [
                    'Misc',
                    [
                        'fullscreen',
                        'codeview',
                        'undo',
                        'redo',
                        'help'
                    ],
                ]
            ],


        });
    });
})(jQuery);