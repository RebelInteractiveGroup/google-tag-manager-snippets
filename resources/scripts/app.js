'use strict';
(function($){
   $(function(){
       if( $('.acf-code textarea').length ) {
        $('.acf-code').find('textarea').each(function() {
           var editorSettings = wp.codeEditor.defaultSettings ? _.clone( wp.codeEditor.defaultSettings ) : {};
           editorSettings.codemirror = _.extend(
               {},
               editorSettings.codemirror,
               {
                  lint: false,
                  tabSize: 2
               }
           );
           var editor = wp.codeEditor.initialize( $(this), editorSettings );
       });
      }
   });
})(jQuery);
