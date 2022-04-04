<style type="text/css">
    .tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
    .tg td{background-color:#fff;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
           font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{background-color:#f0f0f0;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
           font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-dncm{border-color:inherit;font-weight:bold;position:-webkit-sticky;position:sticky;text-align:left;top:-1px;
                 vertical-align:top;will-change:transform}
    .tg .tg-btxf{background-color:#f9f9f9;border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg-sort-header::-moz-selection{background:0 0}
    .tg-sort-header::selection{background:0 0}.tg-sort-header{cursor:pointer}
    .tg-sort-header:after{content:'';float:right;margin-top:7px;border-width:0 5px 5px;border-style:solid;
                          border-color:#404040 transparent;visibility:hidden}
    .tg-sort-header:hover:after{visibility:visible}
    .tg-sort-asc:after,.tg-sort-asc:hover:after,.tg-sort-desc:after{visibility:visible;opacity:.4}
    .tg-sort-desc:after{border-bottom:none;border-width:5px 5px 0}</style>
<table id="tg-o6Y4o" class="tg">
    <thead>
        <tr>
            <th class="tg-dncm">URL</th>
            <th class="tg-dncm">Xpath<input type="checkbox" name="scelta" value="Xpath"/></th>
            <th class="tg-dncm">Title<input type="checkbox" name="scelta" value="Title"/></th>
            <th class="tg-dncm">Azioni</th>
            <th class="tg-dncm">Mapping</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tg-btxf"></td>
            <td class="tg-btxf"></td>
            <td class="tg-btxf"></td>
            <td class="tg-btxf"></td> 
            <td class="tg-btxf"></td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>

            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
        </tr>

 <!--  <script charset="utf-8">var TGSort = window.TGSort || function(n){"use strict"; function r(n){return n?n.length:0}function t(n, t, e, o = 0){for (e = r(n); o < e; ++o)t(n[o], o)}function e(n){return n.split("").reverse().join("")}function o(n){var e = n[0]; return t(n, function(n){for (; !n.startsWith(e); )e = e.substring(0, r(e) - 1)}), r(e)}function u(n, r, e = []){return t(n, function(n){r(n) && e.push(n)}), e}var a = parseFloat; function i(n, r){return function(t){var e = ""; return t.replace(n, function(n, t, o){return e = t.replace(r, "") + "." + (o || "").substring(1)}), a(e)}}var s = i(/^(?:\s*)([+-]?(?:\d+)(?:,\d{3})*)(\.\d*)?$/g, /,/g), c = i(/^(?:\s*)([+-]?(?:\d+)(?:\.\d{3})*)(,\d*)?$/g, /\./g); function f(n){var t = a(n); return!isNaN(t) && r("" + t) + 1 >= r(n)?t:NaN}function d(n){var e = [], o = n; return t([f, s, c], function(u){var a = [], i = []; t(n, function(n, r){r = u(n), a.push(r), r || i.push(n)}), r(i) < r(o) && (o = i, e = a)}), r(u(o, function(n){return n == o[0]})) == r(o)?e:[]}function v(n){if ("TABLE" == n.nodeName){for (var a = function(r){var e, o, u = [], a = []; return function n(r, e){e(r), t(r.childNodes, function(r){n(r, e)})}(n, function(n){"TR" == (o = n.nodeName)?(e = [], u.push(e), a.push(n)):"TD" != o && "TH" != o || e.push(n)}), [u, a]}(), i = a[0], s = a[1], c = r(i), f = c > 1 && r(i[0]) < r(i[1])?1:0, v = f + 1, p = i[f], h = r(p), l = [], g = [], N = [], m = v; m < c; ++m){for (var T = 0; T < h; ++T){r(g) < h && g.push([]); var C = i[m][T], L = C.textContent || C.innerText || ""; g[T].push(L.trim())}N.push(m - v)}t(p, function(n, t){l[t] = 0; var a = n.classList; a.add("tg-sort-header"), n.addEventListener("click", function(){var n = l[t]; !function(){for (var n = 0; n < h; ++n){var r = p[n].classList; r.remove("tg-sort-asc"), r.remove("tg-sort-desc"), l[n] = 0}}(), (n = 1 == n? - 1: + !n) && a.add(n > 0?"tg-sort-asc":"tg-sort-desc"), l[t] = n; var i, f = g[t], m = function(r, t){return n * f[r].localeCompare(f[t]) || n * (r - t)}, T = function(n){var t = d(n); if (!r(t)){var u = o(n), a = o(n.map(e)); t = d(n.map(function(n){return n.substring(u, r(n) - a)}))}return t}(f); (r(T) || r(T = r(u(i = f.map(Date.parse), isNaN))?[]:i)) && (m = function(r, t){var e = T[r], o = T[t], u = isNaN(e), a = isNaN(o); return u && a?0:u? - n:a?n:e > o?n:e < o? - n:n * (r - t)}); var C, L = N.slice(); L.sort(m); for (var E = v; E < c; ++E)(C = s[E].parentNode).removeChild(s[E]); for (E = v; E < c; ++E)C.appendChild(s[v + L[E - v]])})})}}n.addEventListener("DOMContentLoaded", function(){for (var t = n.getElementsByClassName("tg"), e = 0; e < r(t); ++e)try{v(t[e])} catch (n){}})}(document)</script>-->
<form action="mapping.php" method="post">
    <p>Immetti l'URL della ricerca interna <input name="urlricerca" type="text" /></p>

    <?php
//https://www.mrw.it/php/php-checkbox_11620.html
    function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp)
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res)
            return null;

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
    }


    $url = array();
    // si dovranno prendere gli URL da lista URL o file
	array_push($url, "https://www.carpisa.it/it_it/tracollina-margo--v1-bsa49201442/p");
    array_push($url, "https://www.carpisa.it/it_it/zaino---necessaire-staccabile-alfa-go--jeep--bsa53302942/p?skuId=10572");
    //print_r($url);

    foreach ($url as $key => $value) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTMLFile($value);
		//var_dump($dom);
        $xpath = new DOMXPath($dom);
		// si dovranno prendere gli Xpath da lista URL o file
        $nodelist = $xpath->query('/html/body/div[2]/div/div[1]/div/div/div/div[3]/div/div/div/section/div/div/div/div[1]/div[2]/div/div[2]/div/div[11]/div[2]/span/span[3]');
        //var_dump($nodelist);
        
        foreach ($nodelist as $n) {
            $valorexpath = $n->nodeValue;
            echo "<tr>";
            echo "<td class='tg-btxf'>";
            echo $value;
            echo "</td>";
            echo "<td class='tg-btxf'>";
            echo $valorexpath;
            echo "</td>";
            echo " <td class='tg-btxf'>";
            echo page_title($value);
            echo "</td>";
            echo " <td class='tg-btxf'></td>";
            echo " <td class='tg-btxf'></td>";
            echo "</tr>";
            echo '<input type="hidden" name="valorexpath[]" value="'. $valorexpath. '">';
            echo '<input type="hidden" name="url[]" value="'. $value. '">';
        }
    }
    
    
    ?>
</tbody>
</table>

 <p><input type="submit" /></p>
</form>