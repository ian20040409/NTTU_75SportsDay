<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2299.3">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Monaco; color: #f6f6ef; -webkit-text-stroke: #f6f6ef; background-color: #1d1e1a}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Monaco; color: #625e4c; -webkit-text-stroke: #625e4c; background-color: #1d1e1a}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Monaco; color: #e0d64b; -webkit-text-stroke: #e0d64b; background-color: #1d1e1a}
    span.s1 {font-kerning: none}
    span.s2 {font-kerning: none; color: #f6f6ef; -webkit-text-stroke: 0px #f6f6ef}
    span.s3 {font-kerning: none; color: #0a56d8; -webkit-text-stroke: 0px #0a56d8}
    span.s4 {font-kerning: none; color: #f4003f; -webkit-text-stroke: 0px #f4003f}
    span.s5 {font-kerning: none; color: #58d1eb; -webkit-text-stroke: 0px #58d1eb}
    span.s6 {font-kerning: none; color: #e0d64b; -webkit-text-stroke: 0px #e0d64b}
    span.s7 {font-kerning: none; color: #9d65ff; -webkit-text-stroke: 0px #9d65ff}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;?php</span></p>
<p class="p2"><span class="s1">// get the current view</span></p>
<p class="p3"><span class="s2">$counter</span><span class="s3"> </span><span class="s2">=</span><span class="s3"> </span><span class="s4">file_get_contents</span><span class="s2">(</span><span class="s1">"article_counter.dat"</span><span class="s2">);</span></p>
<p class="p1"><span class="s1"> </span></p>
<p class="p1"><span class="s5">if</span><span class="s3"> </span><span class="s1">(!</span><span class="s5">isset</span><span class="s1">($_COOKIE[</span><span class="s6">'article_read'</span><span class="s1">]))</span><span class="s3"> </span><span class="s1">{</span></p>
<p class="p3"><span class="s3">    </span><span class="s4">setcookie</span><span class="s2">(</span><span class="s1">"article_read"</span><span class="s2">,</span><span class="s3"> </span><span class="s7">1</span><span class="s2">,</span><span class="s3"> </span><span class="s4">time</span><span class="s2">()+</span><span class="s7">3600</span><span class="s2">);</span></p>
<p class="p1"><span class="s3">    </span><span class="s1">$counter++;</span></p>
<p class="p3"><span class="s3">    </span><span class="s2">$fp</span><span class="s3"> </span><span class="s2">=</span><span class="s3"> </span><span class="s4">fopen</span><span class="s2">(</span><span class="s1">"article_counter.dat, "</span><span class="s2">w</span><span class="s1">");</span></p>
<p class="p3"><span class="s1">    fwrite($fp, $counter);</span></p>
<p class="p3"><span class="s1">    fclose($fp);</span></p>
<p class="p3"><span class="s1">}</span></p>
<p class="p1"><span class="s1"> </span></p>
<p class="p3"><span class="s1">echo "</span><span class="s2">document.</span><span class="s4">write</span><span class="s2">(</span><span class="s1">'" . $counter . "'</span><span class="s2">);";</span></p>
<p class="p1"><span class="s1">?&gt;</span></p>
</body>
</html>
