// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function() {
  CodeMirror.defineMode("markdown_with_stex", function(){
    var inner = CodeMirror.getMode({}, "stex");
    var outer = CodeMirror.getMode({}, "markdown");

    var innerOptions = {
      open: '$',
      close: '$',
      mode: inner,
      delimStyle: 'delim',
      innerStyle: 'inner'
    };

    return CodeMirror.multiplexingMode(outer, innerOptions);
  });

  var mode = CodeMirror.getMode({}, "markdown_with_stex");

  function MT(name) {
    test.mode(
      name,
      mode,
      Array.prototype.slice.call(arguments, 1),
      'multiplexing');
  }

  MT(
    "stexInsideMarkdown",
    "[strong **Equation:**] [delim&delim-open $][inner&tag \\pi][delim&delim-close $]");
})();
# Change 3 on 2023-08-30
