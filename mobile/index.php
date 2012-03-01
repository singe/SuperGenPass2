<?php
$guid = bin2hex(file_get_contents('/dev/urandom', 0, null, -1, 16));
$guid = str_replace("0","g",$guid);
$guid = str_replace("1","H",$guid);
$guid = str_replace("2","I",$guid);
$guid = str_replace("3","j",$guid);
$guid = str_replace("4","K",$guid);
$guid = str_replace("5","l",$guid);
$guid = str_replace("6","M",$guid);
$guid = str_replace("7","n",$guid);
$guid = str_replace("8","O",$guid);
$guid = str_replace("9","P",$guid);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=320">
		<link rel="alternative" lang="fr" hreflang="fr" title="En français" href="index.fr">
		<link rel="alternative" lang="es" hreflang="es" title="En español" href="index.es">
		<link rel="alternative" lang="de" hreflang="de" title="Auf Deutsch" href="index.de">
		<link rel="alternative" lang="pt-br" hreflang="pt-br" title="No português brasileiro" href="index.pt-br">
		<link rel="alternative" lang="zh-hk" hreflang="zh-hk" title="繁體中文" href="index.zh-hk">
		<link rel="alternative" lang="hu" hreflang="hu" title="Magyarul" href="index.hu">

		<style type="text/css">

			body { margin:1em; padding:0; background:#fff; color:#000; font-family:Helvetica, Arial, sans-serif; }
			a { color:#333; }
			h2 { margin:0 0 1.5em 0; font-size:1em; }
			h4 { margin:0 0 0.25em 0; font-size:1em; }
			p { margin:0 0 1.5em 0; }
			p#Warning { color:#f00; font-weight:bold; }
			input#DisableTLD { margin:0.5em 0 0 0; }
			input#GenPasswd { border:solid 2px #333; padding:3px; }
			label#Small { font-size:0.85em; }
			div#Footer { float:left; margin:0; padding:1em 0 0 0; border-top:solid 1px #ccc; }
			div#Footer p { margin:0 0 1em 0; padding:0; }

		</style>

		<script type="text/javascript">

			function b64_md5(p) {
				p=utf8_en(p);
				return binl2b64(core_md5(str2binl(p),p.length*8));
			}

			function hex_md5(p) {
				p=utf8_en(p);
				return binl2hex(core_md5(str2binl(p),p.length*8));
			}

			function binl2b64(binarray) {
				var tab='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678998';
				var str='';
				for(var i=0; i<binarray.length*4; i+=3) {
					var triplet=(((binarray[i>>2]>>8*(i%4))&0xFF)<<16)|(((binarray[i+1>>2]>>8*((i+1)%4))&0xFF)<<8)|((binarray[i+2>>2]>>8*((i+2)%4))&0xFF);
					for(var j=0; j<4; j++) {
						str+=tab.charAt((triplet>>6*(3-j))&0x3F);
					}
				}
				return str;
			}

			function binl2hex(binarray) {
				var hex_tab='0123456789abcdef';
				var str='';
				for(var i=0; i<binarray.length*4; i++) {
					str+=hex_tab.charAt((binarray[i>>2]>>((i%4)*8+4))&0xF)+hex_tab.charAt((binarray[i>>2]>>((i%4)*8))&0xF);
				}
				return str;
			}

			function core_md5(x,len){
				x[len>>5]|=0x80<<((len)%32); x[(((len+64)>>>9)<<4)+14]=len;
				var a=1732584193; var b=-271733879; var c=-1732584194; var d=271733878;
				for(var i=0;i<x.length;i+=16){
					var olda=a; var oldb=b; var oldc=c; var oldd=d;
					a=md5_ff(a,b,c,d,x[i+0],7,-680876936); d=md5_ff(d,a,b,c,x[i+1],12,-389564586); c=md5_ff(c,d,a,b,x[i+2],17,606105819); b=md5_ff(b,c,d,a,x[i+3],22,-1044525330);
					a=md5_ff(a,b,c,d,x[i+4],7,-176418897); d=md5_ff(d,a,b,c,x[i+5],12,1200080426); c=md5_ff(c,d,a,b,x[i+6],17,-1473231341); b=md5_ff(b,c,d,a,x[i+7],22,-45705983);
					a=md5_ff(a,b,c,d,x[i+8],7,1770035416); d=md5_ff(d,a,b,c,x[i+9],12,-1958414417); c=md5_ff(c,d,a,b,x[i+10],17,-42063); b=md5_ff(b,c,d,a,x[i+11],22,-1990404162);
					a=md5_ff(a,b,c,d,x[i+12],7,1804603682); d=md5_ff(d,a,b,c,x[i+13],12,-40341101); c=md5_ff(c,d,a,b,x[i+14],17,-1502002290); b=md5_ff(b,c,d,a,x[i+15],22,1236535329);
					a=md5_gg(a,b,c,d,x[i+1],5,-165796510); d=md5_gg(d,a,b,c,x[i+6],9,-1069501632); c=md5_gg(c,d,a,b,x[i+11],14,643717713); b=md5_gg(b,c,d,a,x[i+0],20,-373897302);
					a=md5_gg(a,b,c,d,x[i+5],5,-701558691); d=md5_gg(d,a,b,c,x[i+10],9,38016083); c=md5_gg(c,d,a,b,x[i+15],14,-660478335); b=md5_gg(b,c,d,a,x[i+4],20,-405537848);
					a=md5_gg(a,b,c,d,x[i+9],5,568446438); d=md5_gg(d,a,b,c,x[i+14],9,-1019803690); c=md5_gg(c,d,a,b,x[i+3],14,-187363961); b=md5_gg(b,c,d,a,x[i+8],20,1163531501);
					a=md5_gg(a,b,c,d,x[i+13],5,-1444681467); d=md5_gg(d,a,b,c,x[i+2],9,-51403784); c=md5_gg(c,d,a,b,x[i+7],14,1735328473); b=md5_gg(b,c,d,a,x[i+12],20,-1926607734);
					a=md5_hh(a,b,c,d,x[i+5],4,-378558); d=md5_hh(d,a,b,c,x[i+8],11,-2022574463); c=md5_hh(c,d,a,b,x[i+11],16,1839030562); b=md5_hh(b,c,d,a,x[i+14],23,-35309556);
					a=md5_hh(a,b,c,d,x[i+1],4,-1530992060); d=md5_hh(d,a,b,c,x[i+4],11,1272893353); c=md5_hh(c,d,a,b,x[i+7],16,-155497632); b=md5_hh(b,c,d,a,x[i+10],23,-1094730640);
					a=md5_hh(a,b,c,d,x[i+13],4,681279174); d=md5_hh(d,a,b,c,x[i+0],11,-358537222); c=md5_hh(c,d,a,b,x[i+3],16,-722521979); b=md5_hh(b,c,d,a,x[i+6],23,76029189);
					a=md5_hh(a,b,c,d,x[i+9],4,-640364487); d=md5_hh(d,a,b,c,x[i+12],11,-421815835); c=md5_hh(c,d,a,b,x[i+15],16,530742520); b=md5_hh(b,c,d,a,x[i+2],23,-995338651);
					a=md5_ii(a,b,c,d,x[i+0],6,-198630844); d=md5_ii(d,a,b,c,x[i+7],10,1126891415); c=md5_ii(c,d,a,b,x[i+14],15,-1416354905); b=md5_ii(b,c,d,a,x[i+5],21,-57434055);
					a=md5_ii(a,b,c,d,x[i+12],6,1700485571); d=md5_ii(d,a,b,c,x[i+3],10,-1894986606); c=md5_ii(c,d,a,b,x[i+10],15,-1051523); b=md5_ii(b,c,d,a,x[i+1],21,-2054922799);
					a=md5_ii(a,b,c,d,x[i+8],6,1873313359); d=md5_ii(d,a,b,c,x[i+15],10,-30611744); c=md5_ii(c,d,a,b,x[i+6],15,-1560198380); b=md5_ii(b,c,d,a,x[i+13],21,1309151649);
					a=md5_ii(a,b,c,d,x[i+4],6,-145523070); d=md5_ii(d,a,b,c,x[i+11],10,-1120210379); c=md5_ii(c,d,a,b,x[i+2],15,718787259); b=md5_ii(b,c,d,a,x[i+9],21,-343485551);
					a=safe_add(a,olda); b=safe_add(b,oldb); c=safe_add(c,oldc); d=safe_add(d,oldd);
				}
				return Array(a,b,c,d);
			}

			function md5_cmn(q,a,b,x,s,t) { return safe_add(bit_rol(safe_add(safe_add(a,q),safe_add(x,t)),s),b); }
			function md5_ff(a,b,c,d,x,s,t) { return md5_cmn((b&c)|((~b)&d),a,b,x,s,t); }
			function md5_gg(a,b,c,d,x,s,t) { return md5_cmn((b&d)|(c&(~d)),a,b,x,s,t); }
			function md5_hh(a,b,c,d,x,s,t) { return md5_cmn(b^c^d,a,b,x,s,t); }
			function md5_ii(a,b,c,d,x,s,t) { return md5_cmn(c^(b|(~d)),a,b,x,s,t); }
			function safe_add(x,y) { var lsw=(x&0xFFFF)+(y&0xFFFF); var msw=(x>>16)+(y>>16)+(lsw>>16); return (msw<<16)|(lsw&0xFFFF); }
			function bit_rol(num,cnt) { return (num<<cnt)|(num>>>(32-cnt)); }
			function str2binl(str) { var bin=Array(); var mask=(1<<8)-1; for(var i=0;i<str.length*8;i+=8) bin[i>>5]|=(str.charCodeAt(i/8)&mask)<<(i%32); return bin; }
			function utf8_en(str){return unescape(encodeURIComponent(str));}

			function <?=$guid?>_generate_passwd(Passwd,Len) {
				var i=0;
				while(i<10||!(<?=$guid?>_check_passwd(Passwd.substring(0,Len)))) {
					Passwd=b64_md5(Passwd);
					i++;
				}
				return Passwd.substring(0,Len);
			}

			function <?=$guid?>_check_passwd(Passwd) {
				return (Passwd.search(/[a-z]/)===0&&Passwd.search(/[0-9]/)>0&&Passwd.search(/[A-Z]/)>0)?true:false;
			}

			function <?=$guid?>_validate_length(Len) {
				Len=(parseInt(Len))?parseInt(Len):10;
				if(Len<4) {
					Len=4;
				} else if(Len>24) {
					Len=24;
				}
				return Len;
			}

			function <?=$guid?>_process_uri(URI,DisableTLD) {

				URI=URI.toLowerCase();
				var HostNameIsolator=new RegExp('^(http|https|ftp|ftps|webdav|gopher|rtsp|irc|nntp|pop|imap|smtp)://([^/:]+)');
				var HostName=URI.match(HostNameIsolator);

				if(HostName&&HostName[2]!=null) {
					HostName=HostName[2];
				} else {
					HostNameIsolator=new RegExp('^([^/:]+)');
					HostName=URI.match(HostNameIsolator);
					HostName=(HostName[1]!=null)?HostName[1]:URI;
				}

				HostNameIsolator=new RegExp('^([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})$');
				HostName=(HostName.match(HostNameIsolator))?[HostName]:HostName.split('.');

				if(HostName[2]==null||DisableTLD) {
					URI=HostName.join('.');
				} else {
					URI=HostName[HostName.length-2]+'.'+HostName[HostName.length-1];
					var TLDList=['ac.ac','com.ac','edu.ac','gov.ac','net.ac','mil.ac','org.ac','com.ae','net.ae','org.ae','gov.ae','ac.ae','co.ae','sch.ae','pro.ae','com.ai','org.ai','edu.ai','gov.ai','com.ar','net.ar','org.ar','gov.ar','mil.ar','edu.ar','int.ar','co.at','ac.at','or.at','gv.at','priv.at','com.au','gov.au','org.au','edu.au','id.au','oz.au','info.au','net.au','asn.au','csiro.au','telememo.au','conf.au','otc.au','id.au','com.az','net.az','org.az','com.bb','net.bb','org.bb','ac.be','belgie.be','dns.be','fgov.be','com.bh','gov.bh','net.bh','edu.bh','org.bh','com.bm','edu.bm','gov.bm','org.bm','net.bm','adm.br','adv.br','agr.br','am.br','arq.br','art.br','ato.br','bio.br','bmd.br','cim.br','cng.br','cnt.br','com.br','coop.br','ecn.br','edu.br','eng.br','esp.br','etc.br','eti.br','far.br','fm.br','fnd.br','fot.br','fst.br','g12.br','ggf.br','gov.br','imb.br','ind.br','inf.br','jor.br','lel.br','mat.br','med.br','mil.br','mus.br','net.br','nom.br','not.br','ntr.br','odo.br','org.br','ppg.br','pro.br','psc.br','psi.br','qsl.br','rec.br','slg.br','srv.br','tmp.br','trd.br','tur.br','tv.br','vet.br','zlg.br','com.bs','net.bs','org.bs','ab.ca','bc.ca','mb.ca','nb.ca','nf.ca','nl.ca','ns.ca','nt.ca','nu.ca','on.ca','pe.ca','qc.ca','sk.ca','yk.ca','gc.ca','co.ck','net.ck','org.ck','edu.ck','gov.ck','com.cn','edu.cn','gov.cn','net.cn','org.cn','ac.cn','ah.cn','bj.cn','cq.cn','gd.cn','gs.cn','gx.cn','gz.cn','hb.cn','he.cn','hi.cn','hk.cn','hl.cn','hn.cn','jl.cn','js.cn','ln.cn','mo.cn','nm.cn','nx.cn','qh.cn','sc.cn','sn.cn','sh.cn','sx.cn','tj.cn','tw.cn','xj.cn','xz.cn','yn.cn','zj.cn','arts.co','com.co','edu.co','firm.co','gov.co','info.co','int.co','nom.co','mil.co','org.co','rec.co','store.co','web.co','ac.cr','co.cr','ed.cr','fi.cr','go.cr','or.cr','sa.cr','com.cu','net.cu','org.cu','ac.cy','com.cy','gov.cy','net.cy','org.cy','co.dk','art.do','com.do','edu.do','gov.do','gob.do','org.do','mil.do','net.do','sld.do','web.do','com.dz','org.dz','net.dz','gov.dz','edu.dz','ass.dz','pol.dz','art.dz','com.ec','k12.ec','edu.ec','fin.ec','med.ec','gov.ec','mil.ec','org.ec','net.ec','com.ee','pri.ee','fie.ee','org.ee','med.ee','com.eg','edu.eg','eun.eg','gov.eg','net.eg','org.eg','sci.eg','com.er','net.er','org.er','edu.er','mil.er','gov.er','ind.er','com.es','org.es','gob.es','edu.es','nom.es','com.et','gov.et','org.et','edu.et','net.et','biz.et','name.et','info.et','ac.fj','com.fj','gov.fj','id.fj','org.fj','school.fj','com.fk','ac.fk','gov.fk','net.fk','nom.fk','org.fk','asso.fr','nom.fr','barreau.fr','com.fr','prd.fr','presse.fr','tm.fr','aeroport.fr','assedic.fr','avocat.fr','avoues.fr','cci.fr','chambagri.fr','chirurgiens-dentistes.fr','experts-comptables.fr','geometre-expert.fr','gouv.fr','greta.fr','huissier-justice.fr','medecin.fr','notaires.fr','pharmacien.fr','port.fr','veterinaire.fr','com.ge','edu.ge','gov.ge','mil.ge','net.ge','org.ge','pvt.ge','co.gg','org.gg','sch.gg','ac.gg','gov.gg','ltd.gg','ind.gg','net.gg','alderney.gg','guernsey.gg','sark.gg','com.gr','edu.gr','gov.gr','net.gr','org.gr','com.gt','edu.gt','net.gt','gob.gt','org.gt','mil.gt','ind.gt','com.gu','edu.gu','net.gu','org.gu','gov.gu','mil.gu','com.hk','net.hk','org.hk','idv.hk','gov.hk','edu.hk','co.hu','2000.hu','erotika.hu','jogasz.hu','sex.hu','video.hu','info.hu','agrar.hu','film.hu','konyvelo.hu','shop.hu','org.hu','bolt.hu','forum.hu','lakas.hu','suli.hu','priv.hu','casino.hu','games.hu','media.hu','szex.hu','sport.hu','city.hu','hotel.hu','news.hu','tozsde.hu','tm.hu','erotica.hu','ingatlan.hu','reklam.hu','utazas.hu','ac.id','co.id','go.id','mil.id','net.id','or.id','co.il','net.il','org.il','ac.il','gov.il','k12.il','muni.il','idf.il','co.im','net.im','org.im','ac.im','lkd.co.im','gov.im','nic.im','plc.co.im','co.in','net.in','ac.in','ernet.in','gov.in','nic.in','res.in','gen.in','firm.in','mil.in','org.in','ind.in','ac.ir','co.ir','gov.ir','id.ir','net.ir','org.ir','sch.ir','ac.je','co.je','net.je','org.je','gov.je','ind.je','jersey.je','ltd.je','sch.je','com.jo','org.jo','net.jo','gov.jo','edu.jo','mil.jo','ad.jp','ac.jp','co.jp','go.jp','or.jp','ne.jp','gr.jp','ed.jp','lg.jp','net.jp','org.jp','gov.jp','hokkaido.jp','aomori.jp','iwate.jp','miyagi.jp','akita.jp','yamagata.jp','fukushima.jp','ibaraki.jp','tochigi.jp','gunma.jp','saitama.jp','chiba.jp','tokyo.jp','kanagawa.jp','niigata.jp','toyama.jp','ishikawa.jp','fukui.jp','yamanashi.jp','nagano.jp','gifu.jp','shizuoka.jp','aichi.jp','mie.jp','shiga.jp','kyoto.jp','osaka.jp','hyogo.jp','nara.jp','wakayama.jp','tottori.jp','shimane.jp','okayama.jp','hiroshima.jp','yamaguchi.jp','tokushima.jp','kagawa.jp','ehime.jp','kochi.jp','fukuoka.jp','saga.jp','nagasaki.jp','kumamoto.jp','oita.jp','miyazaki.jp','kagoshima.jp','okinawa.jp','sapporo.jp','sendai.jp','yokohama.jp','kawasaki.jp','nagoya.jp','kobe.jp','kitakyushu.jp','utsunomiya.jp','kanazawa.jp','takamatsu.jp','matsuyama.jp','com.kh','net.kh','org.kh','per.kh','edu.kh','gov.kh','mil.kh','ac.kr','co.kr','go.kr','ne.kr','or.kr','pe.kr','re.kr','seoul.kr','kyonggi.kr','com.kw','net.kw','org.kw','edu.kw','gov.kw','com.la','net.la','org.la','com.lb','org.lb','net.lb','edu.lb','gov.lb','mil.lb','com.lc','edu.lc','gov.lc','net.lc','org.lc','com.lv','net.lv','org.lv','edu.lv','gov.lv','mil.lv','id.lv','asn.lv','conf.lv','com.ly','net.ly','org.ly','co.ma','net.ma','org.ma','press.ma','ac.ma','com.mk','com.mm','net.mm','org.mm','edu.mm','gov.mm','com.mn','org.mn','edu.mn','gov.mn','museum.mn','com.mo','net.mo','org.mo','edu.mo','gov.mo','com.mt','net.mt','org.mt','edu.mt','tm.mt','uu.mt','com.mx','net.mx','org.mx','gob.mx','edu.mx','com.my','org.my','gov.my','edu.my','net.my','com.na','org.na','net.na','alt.na','edu.na','cul.na','unam.na','telecom.na','com.nc','net.nc','org.nc','ac.ng','edu.ng','sch.ng','com.ng','gov.ng','org.ng','net.ng','gob.ni','com.ni','net.ni','edu.ni','nom.ni','org.ni','com.np','net.np','org.np','gov.np','edu.np','ac.nz','co.nz','cri.nz','gen.nz','geek.nz','govt.nz','iwi.nz','maori.nz','mil.nz','net.nz','org.nz','school.nz','com.om','co.om','edu.om','ac.om','gov.om','net.om','org.om','mod.om','museum.om','biz.om','pro.om','med.om','com.pa','net.pa','org.pa','edu.pa','ac.pa','gob.pa','sld.pa','edu.pe','gob.pe','nom.pe','mil.pe','org.pe','com.pe','net.pe','com.pg','net.pg','ac.pg','com.ph','net.ph','org.ph','mil.ph','ngo.ph','aid.pl','agro.pl','atm.pl','auto.pl','biz.pl','com.pl','edu.pl','gmina.pl','gsm.pl','info.pl','mail.pl','miasta.pl','media.pl','mil.pl','net.pl','nieruchomosci.pl','nom.pl','org.pl','pc.pl','powiat.pl','priv.pl','realestate.pl','rel.pl','sex.pl','shop.pl','sklep.pl','sos.pl','szkola.pl','targi.pl','tm.pl','tourism.pl','travel.pl','turystyka.pl','com.pk','net.pk','edu.pk','org.pk','fam.pk','biz.pk','web.pk','gov.pk','gob.pk','gok.pk','gon.pk','gop.pk','gos.pk','edu.ps','gov.ps','plo.ps','sec.ps','com.pt','edu.pt','gov.pt','int.pt','net.pt','nome.pt','org.pt','publ.pt','com.py','net.py','org.py','edu.py','com.qa','net.qa','org.qa','edu.qa','gov.qa','asso.re','com.re','nom.re','com.ro','org.ro','tm.ro','nt.ro','nom.ro','info.ro','rec.ro','arts.ro','firm.ro','store.ro','www.ro','com.ru','net.ru','org.ru','gov.ru','pp.ru','com.sa','edu.sa','sch.sa','med.sa','gov.sa','net.sa','org.sa','pub.sa','com.sb','net.sb','org.sb','edu.sb','gov.sb','com.sd','net.sd','org.sd','edu.sd','sch.sd','med.sd','gov.sd','tm.se','press.se','parti.se','brand.se','fh.se','fhsk.se','fhv.se','komforb.se','kommunalforbund.se','komvux.se','lanarb.se','lanbib.se','naturbruksgymn.se','sshn.se','org.se','pp.se','com.sg','net.sg','org.sg','edu.sg','gov.sg','per.sg','com.sh','net.sh','org.sh','edu.sh','gov.sh','mil.sh','gov.st','saotome.st','principe.st','consulado.st','embaixada.st','org.st','edu.st','net.st','com.st','store.st','mil.st','co.st','com.sv','org.sv','edu.sv','gob.sv','red.sv','com.sy','net.sy','org.sy','gov.sy','ac.th','co.th','go.th','net.th','or.th','com.tn','net.tn','org.tn','edunet.tn','gov.tn','ens.tn','fin.tn','nat.tn','ind.tn','info.tn','intl.tn','rnrt.tn','rnu.tn','rns.tn','tourism.tn','com.tr','net.tr','org.tr','edu.tr','gov.tr','mil.tr','bbs.tr','k12.tr','gen.tr','co.tt','com.tt','org.tt','net.tt','biz.tt','info.tt','pro.tt','int.tt','coop.tt','jobs.tt','mobi.tt','travel.tt','museum.tt','aero.tt','name.tt','gov.tt','edu.tt','nic.tt','us.tt','uk.tt','ca.tt','eu.tt','es.tt','fr.tt','it.tt','se.tt','dk.tt','be.tt','de.tt','at.tt','au.tt','co.tv','com.tw','net.tw','org.tw','edu.tw','idv.tw','gov.tw','com.ua','net.ua','org.ua','edu.ua','gov.ua','ac.ug','co.ug','or.ug','go.ug','co.uk','me.uk','org.uk','edu.uk','ltd.uk','plc.uk','net.uk','sch.uk','nic.uk','ac.uk','gov.uk','nhs.uk','police.uk','mod.uk','dni.us','fed.us','com.uy','edu.uy','net.uy','org.uy','gub.uy','mil.uy','com.ve','net.ve','org.ve','co.ve','edu.ve','gov.ve','mil.ve','arts.ve','bib.ve','firm.ve','info.ve','int.ve','nom.ve','rec.ve','store.ve','tec.ve','web.ve','co.vi','net.vi','org.vi','com.vn','biz.vn','edu.vn','gov.vn','net.vn','org.vn','int.vn','ac.vn','pro.vn','info.vn','health.vn','name.vn','com.vu','edu.vu','net.vu','org.vu','de.vu','ch.vu','fr.vu','com.ws','net.ws','org.ws','gov.ws','edu.ws','ac.yu','co.yu','edu.yu','org.yu','com.ye','net.ye','org.ye','gov.ye','edu.ye','mil.ye','ac.za','alt.za','bourse.za','city.za','co.za','edu.za','gov.za','law.za','mil.za','net.za','ngo.za','nom.za','org.za','school.za','tm.za','web.za','co.zw','ac.zw','org.zw','gov.zw','eu.org','au.com','br.com','cn.com','de.com','de.net','eu.com','gb.com','gb.net','hu.com','no.com','qc.com','ru.com','sa.com','se.com','uk.com','uk.net','us.com','uy.com','za.com','dk.org','tel.no','fax.nr','mob.nr','mobil.nr','mobile.nr','tel.nr','tlf.nr','e164.arpa','za.net','za.org'];
					for(var i=0; i<TLDList.length; i++) {
						if(URI==TLDList[i]) {
							URI=HostName[HostName.length-3]+'.'+URI;
							break;
						}
					}
				}

				return URI;

			}

			function SGPLocal() {

				var Passwd=document.getElementById('Passwd').value;
				var DisableTLD=(document.getElementById('DisableTLD').checked)?true:false;
				var Domain=document.getElementById('Domain').value;
				var Len=<?=$guid?>_validate_length(document.getElementById('Len').value);

				if(Passwd&&Domain) {
					Domain=<?=$guid?>_process_uri(Domain,DisableTLD);
					document.getElementById('GenPasswd').value=<?=$guid?>_generate_passwd(Passwd+':'+Domain,Len);
					document.getElementById('Domain').value=Domain;
					document.getElementById('Len').value=Len;
				}

				return false;

			}

		</script>

    	<title>SuperGenPass Mobile Version</title>

	</head>


	<body>


		<div id="Mobile">

			<h2><a href="http://www.supergenpass.com/">SuperGenPass.com</a></h2>

			<noscript><p id="Warning">Warning: JavaScript is disabled!</p></noscript>

			<form name="Mobile" onsubmit="SGPLocal(); return false;" action="http://localhost:9/" method="POST">

				<h4><label for="Passwd">Master password</label></h4>
				<p><input id="Passwd" name="Passwd" type="password" onchange="document.getElementById('GenPasswd').value='';"></p>

				<h4><label for="Domain">Domain / URL</label></h4>
				<p>
					<input id="Domain" name="Domain" type="text" onchange="document.getElementById('GenPasswd').value='';"><br>
					<input id="DisableTLD" name="DisableTLD" type="checkbox" onchange="document.getElementById('GenPasswd').value='';"> <label id="Small" for="DisableTLD">Disable subdomain removal</label>
				</p>

				<h4><label for="Len">Password length</label></h4>
				<p><input id="Len" name="Len" type="text" size="2" value="12" onchange="document.getElementById('GenPasswd').value='';"> characters</p>

				<p><input type="submit" value="Generate"></p>

				<h4><label for="GenPasswd">Your generated password</label></h4>
				<p><input id="GenPasswd" name="GenPasswd" type="text"></p>

			</form>

		</div>


		<div id="Footer">
			<p><a href="data:text/html;charset=utf-8;base64,PCFET0NUWVBFIEhUTUwgUFVCTElDICItLy9XM0MvL0RURCBIVE1MIDQuMDEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIvaHRtbDQvc3RyaWN0LmR0ZCI+CjxodG1sIGxhbmc9ImVuIj4KCgk8aGVhZD4KCgkJPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTgiPgoJCTxtZXRhIG5hbWU9InZpZXdwb3J0IiBjb250ZW50PSJ3aWR0aD0zMjAiPgoJCTxsaW5rIHJlbD0iYWx0ZXJuYXRpdmUiIGxhbmc9ImZyIiBocmVmbGFuZz0iZnIiIHRpdGxlPSJFbiBmcmFuw6dhaXMiIGhyZWY9ImluZGV4LmZyIj4KCQk8bGluayByZWw9ImFsdGVybmF0aXZlIiBsYW5nPSJlcyIgaHJlZmxhbmc9ImVzIiB0aXRsZT0iRW4gZXNwYcOxb2wiIGhyZWY9ImluZGV4LmVzIj4KCQk8bGluayByZWw9ImFsdGVybmF0aXZlIiBsYW5nPSJkZSIgaHJlZmxhbmc9ImRlIiB0aXRsZT0iQXVmIERldXRzY2giIGhyZWY9ImluZGV4LmRlIj4KCQk8bGluayByZWw9ImFsdGVybmF0aXZlIiBsYW5nPSJwdC1iciIgaHJlZmxhbmc9InB0LWJyIiB0aXRsZT0iTm8gcG9ydHVndcOqcyBicmFzaWxlaXJvIiBocmVmPSJpbmRleC5wdC1iciI+CgkJPGxpbmsgcmVsPSJhbHRlcm5hdGl2ZSIgbGFuZz0iemgtaGsiIGhyZWZsYW5nPSJ6aC1oayIgdGl0bGU9Iue5gemrlOS4reaWhyIgaHJlZj0iaW5kZXguemgtaGsiPgoJCTxsaW5rIHJlbD0iYWx0ZXJuYXRpdmUiIGxhbmc9Imh1IiBocmVmbGFuZz0iaHUiIHRpdGxlPSJNYWd5YXJ1bCIgaHJlZj0iaW5kZXguaHUiPgoKCQk8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoKCQkJYm9keSB7IG1hcmdpbjoxZW07IHBhZGRpbmc6MDsgYmFja2dyb3VuZDojZmZmOyBjb2xvcjojMDAwOyBmb250LWZhbWlseTpIZWx2ZXRpY2EsIEFyaWFsLCBzYW5zLXNlcmlmOyB9CgkJCWEgeyBjb2xvcjojMzMzOyB9CgkJCWgyIHsgbWFyZ2luOjAgMCAxLjVlbSAwOyBmb250LXNpemU6MWVtOyB9CgkJCWg0IHsgbWFyZ2luOjAgMCAwLjI1ZW0gMDsgZm9udC1zaXplOjFlbTsgfQoJCQlwIHsgbWFyZ2luOjAgMCAxLjVlbSAwOyB9CgkJCXAjV2FybmluZyB7IGNvbG9yOiNmMDA7IGZvbnQtd2VpZ2h0OmJvbGQ7IH0KCQkJaW5wdXQjRGlzYWJsZVRMRCB7IG1hcmdpbjowLjVlbSAwIDAgMDsgfQoJCQlpbnB1dCNHZW5QYXNzd2QgeyBib3JkZXI6c29saWQgMnB4ICMzMzM7IHBhZGRpbmc6M3B4OyB9CgkJCWxhYmVsI1NtYWxsIHsgZm9udC1zaXplOjAuODVlbTsgfQoJCQlkaXYjRm9vdGVyIHsgZmxvYXQ6bGVmdDsgbWFyZ2luOjA7IHBhZGRpbmc6MWVtIDAgMCAwOyBib3JkZXItdG9wOnNvbGlkIDFweCAjY2NjOyB9CgkJCWRpdiNGb290ZXIgcCB7IG1hcmdpbjowIDAgMWVtIDA7IHBhZGRpbmc6MDsgfQoKCQk8L3N0eWxlPgoKCQk8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+CgoJCQlmdW5jdGlvbiBiNjRfbWQ1KHApIHsKCQkJCXA9dXRmOF9lbihwKTsKCQkJCXJldHVybiBiaW5sMmI2NChjb3JlX21kNShzdHIyYmlubChwKSxwLmxlbmd0aCo4KSk7CgkJCX0KCgkJCWZ1bmN0aW9uIGhleF9tZDUocCkgewoJCQkJcD11dGY4X2VuKHApOwoJCQkJcmV0dXJuIGJpbmwyaGV4KGNvcmVfbWQ1KHN0cjJiaW5sKHApLHAubGVuZ3RoKjgpKTsKCQkJfQoKCQkJZnVuY3Rpb24gYmlubDJiNjQoYmluYXJyYXkpIHsKCQkJCXZhciB0YWI9J0FCQ0RFRkdISUpLTE1OT1BRUlNUVVZXWFlaYWJjZGVmZ2hpamtsbW5vcHFyc3R1dnd4eXowMTIzNDU2Nzg5OTgnOwoJCQkJdmFyIHN0cj0nJzsKCQkJCWZvcih2YXIgaT0wOyBpPGJpbmFycmF5Lmxlbmd0aCo0OyBpKz0zKSB7CgkJCQkJdmFyIHRyaXBsZXQ9KCgoYmluYXJyYXlbaT4+Ml0+PjgqKGklNCkpJjB4RkYpPDwxNil8KCgoYmluYXJyYXlbaSsxPj4yXT4+OCooKGkrMSklNCkpJjB4RkYpPDw4KXwoKGJpbmFycmF5W2krMj4+Ml0+PjgqKChpKzIpJTQpKSYweEZGKTsKCQkJCQlmb3IodmFyIGo9MDsgajw0OyBqKyspIHsKCQkJCQkJc3RyKz10YWIuY2hhckF0KCh0cmlwbGV0Pj42KigzLWopKSYweDNGKTsKCQkJCQl9CgkJCQl9CgkJCQlyZXR1cm4gc3RyOwoJCQl9CgoJCQlmdW5jdGlvbiBiaW5sMmhleChiaW5hcnJheSkgewoJCQkJdmFyIGhleF90YWI9JzAxMjM0NTY3ODlhYmNkZWYnOwoJCQkJdmFyIHN0cj0nJzsKCQkJCWZvcih2YXIgaT0wOyBpPGJpbmFycmF5Lmxlbmd0aCo0OyBpKyspIHsKCQkJCQlzdHIrPWhleF90YWIuY2hhckF0KChiaW5hcnJheVtpPj4yXT4+KChpJTQpKjgrNCkpJjB4RikraGV4X3RhYi5jaGFyQXQoKGJpbmFycmF5W2k+PjJdPj4oKGklNCkqOCkpJjB4Rik7CgkJCQl9CgkJCQlyZXR1cm4gc3RyOwoJCQl9CgoJCQlmdW5jdGlvbiBjb3JlX21kNSh4LGxlbil7CgkJCQl4W2xlbj4+NV18PTB4ODA8PCgobGVuKSUzMik7IHhbKCgobGVuKzY0KT4+PjkpPDw0KSsxNF09bGVuOwoJCQkJdmFyIGE9MTczMjU4NDE5MzsgdmFyIGI9LTI3MTczMzg3OTsgdmFyIGM9LTE3MzI1ODQxOTQ7IHZhciBkPTI3MTczMzg3ODsKCQkJCWZvcih2YXIgaT0wO2k8eC5sZW5ndGg7aSs9MTYpewoJCQkJCXZhciBvbGRhPWE7IHZhciBvbGRiPWI7IHZhciBvbGRjPWM7IHZhciBvbGRkPWQ7CgkJCQkJYT1tZDVfZmYoYSxiLGMsZCx4W2krMF0sNywtNjgwODc2OTM2KTsgZD1tZDVfZmYoZCxhLGIsYyx4W2krMV0sMTIsLTM4OTU2NDU4Nik7IGM9bWQ1X2ZmKGMsZCxhLGIseFtpKzJdLDE3LDYwNjEwNTgxOSk7IGI9bWQ1X2ZmKGIsYyxkLGEseFtpKzNdLDIyLC0xMDQ0NTI1MzMwKTsKCQkJCQlhPW1kNV9mZihhLGIsYyxkLHhbaSs0XSw3LC0xNzY0MTg4OTcpOyBkPW1kNV9mZihkLGEsYixjLHhbaSs1XSwxMiwxMjAwMDgwNDI2KTsgYz1tZDVfZmYoYyxkLGEsYix4W2krNl0sMTcsLTE0NzMyMzEzNDEpOyBiPW1kNV9mZihiLGMsZCxhLHhbaSs3XSwyMiwtNDU3MDU5ODMpOwoJCQkJCWE9bWQ1X2ZmKGEsYixjLGQseFtpKzhdLDcsMTc3MDAzNTQxNik7IGQ9bWQ1X2ZmKGQsYSxiLGMseFtpKzldLDEyLC0xOTU4NDE0NDE3KTsgYz1tZDVfZmYoYyxkLGEsYix4W2krMTBdLDE3LC00MjA2Myk7IGI9bWQ1X2ZmKGIsYyxkLGEseFtpKzExXSwyMiwtMTk5MDQwNDE2Mik7CgkJCQkJYT1tZDVfZmYoYSxiLGMsZCx4W2krMTJdLDcsMTgwNDYwMzY4Mik7IGQ9bWQ1X2ZmKGQsYSxiLGMseFtpKzEzXSwxMiwtNDAzNDExMDEpOyBjPW1kNV9mZihjLGQsYSxiLHhbaSsxNF0sMTcsLTE1MDIwMDIyOTApOyBiPW1kNV9mZihiLGMsZCxhLHhbaSsxNV0sMjIsMTIzNjUzNTMyOSk7CgkJCQkJYT1tZDVfZ2coYSxiLGMsZCx4W2krMV0sNSwtMTY1Nzk2NTEwKTsgZD1tZDVfZ2coZCxhLGIsYyx4W2krNl0sOSwtMTA2OTUwMTYzMik7IGM9bWQ1X2dnKGMsZCxhLGIseFtpKzExXSwxNCw2NDM3MTc3MTMpOyBiPW1kNV9nZyhiLGMsZCxhLHhbaSswXSwyMCwtMzczODk3MzAyKTsKCQkJCQlhPW1kNV9nZyhhLGIsYyxkLHhbaSs1XSw1LC03MDE1NTg2OTEpOyBkPW1kNV9nZyhkLGEsYixjLHhbaSsxMF0sOSwzODAxNjA4Myk7IGM9bWQ1X2dnKGMsZCxhLGIseFtpKzE1XSwxNCwtNjYwNDc4MzM1KTsgYj1tZDVfZ2coYixjLGQsYSx4W2krNF0sMjAsLTQwNTUzNzg0OCk7CgkJCQkJYT1tZDVfZ2coYSxiLGMsZCx4W2krOV0sNSw1Njg0NDY0MzgpOyBkPW1kNV9nZyhkLGEsYixjLHhbaSsxNF0sOSwtMTAxOTgwMzY5MCk7IGM9bWQ1X2dnKGMsZCxhLGIseFtpKzNdLDE0LC0xODczNjM5NjEpOyBiPW1kNV9nZyhiLGMsZCxhLHhbaSs4XSwyMCwxMTYzNTMxNTAxKTsKCQkJCQlhPW1kNV9nZyhhLGIsYyxkLHhbaSsxM10sNSwtMTQ0NDY4MTQ2Nyk7IGQ9bWQ1X2dnKGQsYSxiLGMseFtpKzJdLDksLTUxNDAzNzg0KTsgYz1tZDVfZ2coYyxkLGEsYix4W2krN10sMTQsMTczNTMyODQ3Myk7IGI9bWQ1X2dnKGIsYyxkLGEseFtpKzEyXSwyMCwtMTkyNjYwNzczNCk7CgkJCQkJYT1tZDVfaGgoYSxiLGMsZCx4W2krNV0sNCwtMzc4NTU4KTsgZD1tZDVfaGgoZCxhLGIsYyx4W2krOF0sMTEsLTIwMjI1NzQ0NjMpOyBjPW1kNV9oaChjLGQsYSxiLHhbaSsxMV0sMTYsMTgzOTAzMDU2Mik7IGI9bWQ1X2hoKGIsYyxkLGEseFtpKzE0XSwyMywtMzUzMDk1NTYpOwoJCQkJCWE9bWQ1X2hoKGEsYixjLGQseFtpKzFdLDQsLTE1MzA5OTIwNjApOyBkPW1kNV9oaChkLGEsYixjLHhbaSs0XSwxMSwxMjcyODkzMzUzKTsgYz1tZDVfaGgoYyxkLGEsYix4W2krN10sMTYsLTE1NTQ5NzYzMik7IGI9bWQ1X2hoKGIsYyxkLGEseFtpKzEwXSwyMywtMTA5NDczMDY0MCk7CgkJCQkJYT1tZDVfaGgoYSxiLGMsZCx4W2krMTNdLDQsNjgxMjc5MTc0KTsgZD1tZDVfaGgoZCxhLGIsYyx4W2krMF0sMTEsLTM1ODUzNzIyMik7IGM9bWQ1X2hoKGMsZCxhLGIseFtpKzNdLDE2LC03MjI1MjE5NzkpOyBiPW1kNV9oaChiLGMsZCxhLHhbaSs2XSwyMyw3NjAyOTE4OSk7CgkJCQkJYT1tZDVfaGgoYSxiLGMsZCx4W2krOV0sNCwtNjQwMzY0NDg3KTsgZD1tZDVfaGgoZCxhLGIsYyx4W2krMTJdLDExLC00MjE4MTU4MzUpOyBjPW1kNV9oaChjLGQsYSxiLHhbaSsxNV0sMTYsNTMwNzQyNTIwKTsgYj1tZDVfaGgoYixjLGQsYSx4W2krMl0sMjMsLTk5NTMzODY1MSk7CgkJCQkJYT1tZDVfaWkoYSxiLGMsZCx4W2krMF0sNiwtMTk4NjMwODQ0KTsgZD1tZDVfaWkoZCxhLGIsYyx4W2krN10sMTAsMTEyNjg5MTQxNSk7IGM9bWQ1X2lpKGMsZCxhLGIseFtpKzE0XSwxNSwtMTQxNjM1NDkwNSk7IGI9bWQ1X2lpKGIsYyxkLGEseFtpKzVdLDIxLC01NzQzNDA1NSk7CgkJCQkJYT1tZDVfaWkoYSxiLGMsZCx4W2krMTJdLDYsMTcwMDQ4NTU3MSk7IGQ9bWQ1X2lpKGQsYSxiLGMseFtpKzNdLDEwLC0xODk0OTg2NjA2KTsgYz1tZDVfaWkoYyxkLGEsYix4W2krMTBdLDE1LC0xMDUxNTIzKTsgYj1tZDVfaWkoYixjLGQsYSx4W2krMV0sMjEsLTIwNTQ5MjI3OTkpOwoJCQkJCWE9bWQ1X2lpKGEsYixjLGQseFtpKzhdLDYsMTg3MzMxMzM1OSk7IGQ9bWQ1X2lpKGQsYSxiLGMseFtpKzE1XSwxMCwtMzA2MTE3NDQpOyBjPW1kNV9paShjLGQsYSxiLHhbaSs2XSwxNSwtMTU2MDE5ODM4MCk7IGI9bWQ1X2lpKGIsYyxkLGEseFtpKzEzXSwyMSwxMzA5MTUxNjQ5KTsKCQkJCQlhPW1kNV9paShhLGIsYyxkLHhbaSs0XSw2LC0xNDU1MjMwNzApOyBkPW1kNV9paShkLGEsYixjLHhbaSsxMV0sMTAsLTExMjAyMTAzNzkpOyBjPW1kNV9paShjLGQsYSxiLHhbaSsyXSwxNSw3MTg3ODcyNTkpOyBiPW1kNV9paShiLGMsZCxhLHhbaSs5XSwyMSwtMzQzNDg1NTUxKTsKCQkJCQlhPXNhZmVfYWRkKGEsb2xkYSk7IGI9c2FmZV9hZGQoYixvbGRiKTsgYz1zYWZlX2FkZChjLG9sZGMpOyBkPXNhZmVfYWRkKGQsb2xkZCk7CgkJCQl9CgkJCQlyZXR1cm4gQXJyYXkoYSxiLGMsZCk7CgkJCX0KCgkJCWZ1bmN0aW9uIG1kNV9jbW4ocSxhLGIseCxzLHQpIHsgcmV0dXJuIHNhZmVfYWRkKGJpdF9yb2woc2FmZV9hZGQoc2FmZV9hZGQoYSxxKSxzYWZlX2FkZCh4LHQpKSxzKSxiKTsgfQoJCQlmdW5jdGlvbiBtZDVfZmYoYSxiLGMsZCx4LHMsdCkgeyByZXR1cm4gbWQ1X2NtbigoYiZjKXwoKH5iKSZkKSxhLGIseCxzLHQpOyB9CgkJCWZ1bmN0aW9uIG1kNV9nZyhhLGIsYyxkLHgscyx0KSB7IHJldHVybiBtZDVfY21uKChiJmQpfChjJih+ZCkpLGEsYix4LHMsdCk7IH0KCQkJZnVuY3Rpb24gbWQ1X2hoKGEsYixjLGQseCxzLHQpIHsgcmV0dXJuIG1kNV9jbW4oYl5jXmQsYSxiLHgscyx0KTsgfQoJCQlmdW5jdGlvbiBtZDVfaWkoYSxiLGMsZCx4LHMsdCkgeyByZXR1cm4gbWQ1X2NtbihjXihifCh+ZCkpLGEsYix4LHMsdCk7IH0KCQkJZnVuY3Rpb24gc2FmZV9hZGQoeCx5KSB7IHZhciBsc3c9KHgmMHhGRkZGKSsoeSYweEZGRkYpOyB2YXIgbXN3PSh4Pj4xNikrKHk+PjE2KSsobHN3Pj4xNik7IHJldHVybiAobXN3PDwxNil8KGxzdyYweEZGRkYpOyB9CgkJCWZ1bmN0aW9uIGJpdF9yb2wobnVtLGNudCkgeyByZXR1cm4gKG51bTw8Y250KXwobnVtPj4+KDMyLWNudCkpOyB9CgkJCWZ1bmN0aW9uIHN0cjJiaW5sKHN0cikgeyB2YXIgYmluPUFycmF5KCk7IHZhciBtYXNrPSgxPDw4KS0xOyBmb3IodmFyIGk9MDtpPHN0ci5sZW5ndGgqODtpKz04KSBiaW5baT4+NV18PShzdHIuY2hhckNvZGVBdChpLzgpJm1hc2spPDwoaSUzMik7IHJldHVybiBiaW47IH0KCQkJZnVuY3Rpb24gdXRmOF9lbihzdHIpe3JldHVybiB1bmVzY2FwZShlbmNvZGVVUklDb21wb25lbnQoc3RyKSk7fQoKCQkJZnVuY3Rpb24gZ3AyX2dlbmVyYXRlX3Bhc3N3ZChQYXNzd2QsTGVuKSB7CgkJCQl2YXIgaT0wOwoJCQkJd2hpbGUoaTwxMHx8IShncDJfY2hlY2tfcGFzc3dkKFBhc3N3ZC5zdWJzdHJpbmcoMCxMZW4pKSkpIHsKCQkJCQlQYXNzd2Q9YjY0X21kNShQYXNzd2QpOwoJCQkJCWkrKzsKCQkJCX0KCQkJCXJldHVybiBQYXNzd2Quc3Vic3RyaW5nKDAsTGVuKTsKCQkJfQoKCQkJZnVuY3Rpb24gZ3AyX2NoZWNrX3Bhc3N3ZChQYXNzd2QpIHsKCQkJCXJldHVybiAoUGFzc3dkLnNlYXJjaCgvW2Etel0vKT09PTAmJlBhc3N3ZC5zZWFyY2goL1swLTldLyk+MCYmUGFzc3dkLnNlYXJjaCgvW0EtWl0vKT4wKT90cnVlOmZhbHNlOwoJCQl9CgoJCQlmdW5jdGlvbiBncDJfdmFsaWRhdGVfbGVuZ3RoKExlbikgewoJCQkJTGVuPShwYXJzZUludChMZW4pKT9wYXJzZUludChMZW4pOjEwOwoJCQkJaWYoTGVuPDQpIHsKCQkJCQlMZW49NDsKCQkJCX0gZWxzZSBpZihMZW4+MjQpIHsKCQkJCQlMZW49MjQ7CgkJCQl9CgkJCQlyZXR1cm4gTGVuOwoJCQl9CgoJCQlmdW5jdGlvbiBncDJfcHJvY2Vzc191cmkoVVJJLERpc2FibGVUTEQpIHsKCgkJCQlVUkk9VVJJLnRvTG93ZXJDYXNlKCk7CgkJCQl2YXIgSG9zdE5hbWVJc29sYXRvcj1uZXcgUmVnRXhwKCdeKGh0dHB8aHR0cHN8ZnRwfGZ0cHN8d2ViZGF2fGdvcGhlcnxydHNwfGlyY3xubnRwfHBvcHxpbWFwfHNtdHApOi8vKFteLzpdKyknKTsKCQkJCXZhciBIb3N0TmFtZT1VUkkubWF0Y2goSG9zdE5hbWVJc29sYXRvcik7CgoJCQkJaWYoSG9zdE5hbWUmJkhvc3ROYW1lWzJdIT1udWxsKSB7CgkJCQkJSG9zdE5hbWU9SG9zdE5hbWVbMl07CgkJCQl9IGVsc2UgewoJCQkJCUhvc3ROYW1lSXNvbGF0b3I9bmV3IFJlZ0V4cCgnXihbXi86XSspJyk7CgkJCQkJSG9zdE5hbWU9VVJJLm1hdGNoKEhvc3ROYW1lSXNvbGF0b3IpOwoJCQkJCUhvc3ROYW1lPShIb3N0TmFtZVsxXSE9bnVsbCk/SG9zdE5hbWVbMV06VVJJOwoJCQkJfQoKCQkJCUhvc3ROYW1lSXNvbGF0b3I9bmV3IFJlZ0V4cCgnXihbMC05XXsxLDN9XC5bMC05XXsxLDN9XC5bMC05XXsxLDN9XC5bMC05XXsxLDN9KSQnKTsKCQkJCUhvc3ROYW1lPShIb3N0TmFtZS5tYXRjaChIb3N0TmFtZUlzb2xhdG9yKSk/W0hvc3ROYW1lXTpIb3N0TmFtZS5zcGxpdCgnLicpOwoKCQkJCWlmKEhvc3ROYW1lWzJdPT1udWxsfHxEaXNhYmxlVExEKSB7CgkJCQkJVVJJPUhvc3ROYW1lLmpvaW4oJy4nKTsKCQkJCX0gZWxzZSB7CgkJCQkJVVJJPUhvc3ROYW1lW0hvc3ROYW1lLmxlbmd0aC0yXSsnLicrSG9zdE5hbWVbSG9zdE5hbWUubGVuZ3RoLTFdOwoJCQkJCXZhciBUTERMaXN0PVsnYWMuYWMnLCdjb20uYWMnLCdlZHUuYWMnLCdnb3YuYWMnLCduZXQuYWMnLCdtaWwuYWMnLCdvcmcuYWMnLCdjb20uYWUnLCduZXQuYWUnLCdvcmcuYWUnLCdnb3YuYWUnLCdhYy5hZScsJ2NvLmFlJywnc2NoLmFlJywncHJvLmFlJywnY29tLmFpJywnb3JnLmFpJywnZWR1LmFpJywnZ292LmFpJywnY29tLmFyJywnbmV0LmFyJywnb3JnLmFyJywnZ292LmFyJywnbWlsLmFyJywnZWR1LmFyJywnaW50LmFyJywnY28uYXQnLCdhYy5hdCcsJ29yLmF0JywnZ3YuYXQnLCdwcml2LmF0JywnY29tLmF1JywnZ292LmF1Jywnb3JnLmF1JywnZWR1LmF1JywnaWQuYXUnLCdvei5hdScsJ2luZm8uYXUnLCduZXQuYXUnLCdhc24uYXUnLCdjc2lyby5hdScsJ3RlbGVtZW1vLmF1JywnY29uZi5hdScsJ290Yy5hdScsJ2lkLmF1JywnY29tLmF6JywnbmV0LmF6Jywnb3JnLmF6JywnY29tLmJiJywnbmV0LmJiJywnb3JnLmJiJywnYWMuYmUnLCdiZWxnaWUuYmUnLCdkbnMuYmUnLCdmZ292LmJlJywnY29tLmJoJywnZ292LmJoJywnbmV0LmJoJywnZWR1LmJoJywnb3JnLmJoJywnY29tLmJtJywnZWR1LmJtJywnZ292LmJtJywnb3JnLmJtJywnbmV0LmJtJywnYWRtLmJyJywnYWR2LmJyJywnYWdyLmJyJywnYW0uYnInLCdhcnEuYnInLCdhcnQuYnInLCdhdG8uYnInLCdiaW8uYnInLCdibWQuYnInLCdjaW0uYnInLCdjbmcuYnInLCdjbnQuYnInLCdjb20uYnInLCdjb29wLmJyJywnZWNuLmJyJywnZWR1LmJyJywnZW5nLmJyJywnZXNwLmJyJywnZXRjLmJyJywnZXRpLmJyJywnZmFyLmJyJywnZm0uYnInLCdmbmQuYnInLCdmb3QuYnInLCdmc3QuYnInLCdnMTIuYnInLCdnZ2YuYnInLCdnb3YuYnInLCdpbWIuYnInLCdpbmQuYnInLCdpbmYuYnInLCdqb3IuYnInLCdsZWwuYnInLCdtYXQuYnInLCdtZWQuYnInLCdtaWwuYnInLCdtdXMuYnInLCduZXQuYnInLCdub20uYnInLCdub3QuYnInLCdudHIuYnInLCdvZG8uYnInLCdvcmcuYnInLCdwcGcuYnInLCdwcm8uYnInLCdwc2MuYnInLCdwc2kuYnInLCdxc2wuYnInLCdyZWMuYnInLCdzbGcuYnInLCdzcnYuYnInLCd0bXAuYnInLCd0cmQuYnInLCd0dXIuYnInLCd0di5icicsJ3ZldC5icicsJ3psZy5icicsJ2NvbS5icycsJ25ldC5icycsJ29yZy5icycsJ2FiLmNhJywnYmMuY2EnLCdtYi5jYScsJ25iLmNhJywnbmYuY2EnLCdubC5jYScsJ25zLmNhJywnbnQuY2EnLCdudS5jYScsJ29uLmNhJywncGUuY2EnLCdxYy5jYScsJ3NrLmNhJywneWsuY2EnLCdnYy5jYScsJ2NvLmNrJywnbmV0LmNrJywnb3JnLmNrJywnZWR1LmNrJywnZ292LmNrJywnY29tLmNuJywnZWR1LmNuJywnZ292LmNuJywnbmV0LmNuJywnb3JnLmNuJywnYWMuY24nLCdhaC5jbicsJ2JqLmNuJywnY3EuY24nLCdnZC5jbicsJ2dzLmNuJywnZ3guY24nLCdnei5jbicsJ2hiLmNuJywnaGUuY24nLCdoaS5jbicsJ2hrLmNuJywnaGwuY24nLCdobi5jbicsJ2psLmNuJywnanMuY24nLCdsbi5jbicsJ21vLmNuJywnbm0uY24nLCdueC5jbicsJ3FoLmNuJywnc2MuY24nLCdzbi5jbicsJ3NoLmNuJywnc3guY24nLCd0ai5jbicsJ3R3LmNuJywneGouY24nLCd4ei5jbicsJ3luLmNuJywnemouY24nLCdhcnRzLmNvJywnY29tLmNvJywnZWR1LmNvJywnZmlybS5jbycsJ2dvdi5jbycsJ2luZm8uY28nLCdpbnQuY28nLCdub20uY28nLCdtaWwuY28nLCdvcmcuY28nLCdyZWMuY28nLCdzdG9yZS5jbycsJ3dlYi5jbycsJ2FjLmNyJywnY28uY3InLCdlZC5jcicsJ2ZpLmNyJywnZ28uY3InLCdvci5jcicsJ3NhLmNyJywnY29tLmN1JywnbmV0LmN1Jywnb3JnLmN1JywnYWMuY3knLCdjb20uY3knLCdnb3YuY3knLCduZXQuY3knLCdvcmcuY3knLCdjby5kaycsJ2FydC5kbycsJ2NvbS5kbycsJ2VkdS5kbycsJ2dvdi5kbycsJ2dvYi5kbycsJ29yZy5kbycsJ21pbC5kbycsJ25ldC5kbycsJ3NsZC5kbycsJ3dlYi5kbycsJ2NvbS5keicsJ29yZy5keicsJ25ldC5keicsJ2dvdi5keicsJ2VkdS5keicsJ2Fzcy5keicsJ3BvbC5keicsJ2FydC5keicsJ2NvbS5lYycsJ2sxMi5lYycsJ2VkdS5lYycsJ2Zpbi5lYycsJ21lZC5lYycsJ2dvdi5lYycsJ21pbC5lYycsJ29yZy5lYycsJ25ldC5lYycsJ2NvbS5lZScsJ3ByaS5lZScsJ2ZpZS5lZScsJ29yZy5lZScsJ21lZC5lZScsJ2NvbS5lZycsJ2VkdS5lZycsJ2V1bi5lZycsJ2dvdi5lZycsJ25ldC5lZycsJ29yZy5lZycsJ3NjaS5lZycsJ2NvbS5lcicsJ25ldC5lcicsJ29yZy5lcicsJ2VkdS5lcicsJ21pbC5lcicsJ2dvdi5lcicsJ2luZC5lcicsJ2NvbS5lcycsJ29yZy5lcycsJ2dvYi5lcycsJ2VkdS5lcycsJ25vbS5lcycsJ2NvbS5ldCcsJ2dvdi5ldCcsJ29yZy5ldCcsJ2VkdS5ldCcsJ25ldC5ldCcsJ2Jpei5ldCcsJ25hbWUuZXQnLCdpbmZvLmV0JywnYWMuZmonLCdjb20uZmonLCdnb3YuZmonLCdpZC5maicsJ29yZy5maicsJ3NjaG9vbC5maicsJ2NvbS5maycsJ2FjLmZrJywnZ292LmZrJywnbmV0LmZrJywnbm9tLmZrJywnb3JnLmZrJywnYXNzby5mcicsJ25vbS5mcicsJ2JhcnJlYXUuZnInLCdjb20uZnInLCdwcmQuZnInLCdwcmVzc2UuZnInLCd0bS5mcicsJ2Flcm9wb3J0LmZyJywnYXNzZWRpYy5mcicsJ2F2b2NhdC5mcicsJ2F2b3Vlcy5mcicsJ2NjaS5mcicsJ2NoYW1iYWdyaS5mcicsJ2NoaXJ1cmdpZW5zLWRlbnRpc3Rlcy5mcicsJ2V4cGVydHMtY29tcHRhYmxlcy5mcicsJ2dlb21ldHJlLWV4cGVydC5mcicsJ2dvdXYuZnInLCdncmV0YS5mcicsJ2h1aXNzaWVyLWp1c3RpY2UuZnInLCdtZWRlY2luLmZyJywnbm90YWlyZXMuZnInLCdwaGFybWFjaWVuLmZyJywncG9ydC5mcicsJ3ZldGVyaW5haXJlLmZyJywnY29tLmdlJywnZWR1LmdlJywnZ292LmdlJywnbWlsLmdlJywnbmV0LmdlJywnb3JnLmdlJywncHZ0LmdlJywnY28uZ2cnLCdvcmcuZ2cnLCdzY2guZ2cnLCdhYy5nZycsJ2dvdi5nZycsJ2x0ZC5nZycsJ2luZC5nZycsJ25ldC5nZycsJ2FsZGVybmV5LmdnJywnZ3Vlcm5zZXkuZ2cnLCdzYXJrLmdnJywnY29tLmdyJywnZWR1LmdyJywnZ292LmdyJywnbmV0LmdyJywnb3JnLmdyJywnY29tLmd0JywnZWR1Lmd0JywnbmV0Lmd0JywnZ29iLmd0Jywnb3JnLmd0JywnbWlsLmd0JywnaW5kLmd0JywnY29tLmd1JywnZWR1Lmd1JywnbmV0Lmd1Jywnb3JnLmd1JywnZ292Lmd1JywnbWlsLmd1JywnY29tLmhrJywnbmV0LmhrJywnb3JnLmhrJywnaWR2LmhrJywnZ292LmhrJywnZWR1LmhrJywnY28uaHUnLCcyMDAwLmh1JywnZXJvdGlrYS5odScsJ2pvZ2Fzei5odScsJ3NleC5odScsJ3ZpZGVvLmh1JywnaW5mby5odScsJ2FncmFyLmh1JywnZmlsbS5odScsJ2tvbnl2ZWxvLmh1Jywnc2hvcC5odScsJ29yZy5odScsJ2JvbHQuaHUnLCdmb3J1bS5odScsJ2xha2FzLmh1Jywnc3VsaS5odScsJ3ByaXYuaHUnLCdjYXNpbm8uaHUnLCdnYW1lcy5odScsJ21lZGlhLmh1Jywnc3pleC5odScsJ3Nwb3J0Lmh1JywnY2l0eS5odScsJ2hvdGVsLmh1JywnbmV3cy5odScsJ3RvenNkZS5odScsJ3RtLmh1JywnZXJvdGljYS5odScsJ2luZ2F0bGFuLmh1JywncmVrbGFtLmh1JywndXRhemFzLmh1JywnYWMuaWQnLCdjby5pZCcsJ2dvLmlkJywnbWlsLmlkJywnbmV0LmlkJywnb3IuaWQnLCdjby5pbCcsJ25ldC5pbCcsJ29yZy5pbCcsJ2FjLmlsJywnZ292LmlsJywnazEyLmlsJywnbXVuaS5pbCcsJ2lkZi5pbCcsJ2NvLmltJywnbmV0LmltJywnb3JnLmltJywnYWMuaW0nLCdsa2QuY28uaW0nLCdnb3YuaW0nLCduaWMuaW0nLCdwbGMuY28uaW0nLCdjby5pbicsJ25ldC5pbicsJ2FjLmluJywnZXJuZXQuaW4nLCdnb3YuaW4nLCduaWMuaW4nLCdyZXMuaW4nLCdnZW4uaW4nLCdmaXJtLmluJywnbWlsLmluJywnb3JnLmluJywnaW5kLmluJywnYWMuaXInLCdjby5pcicsJ2dvdi5pcicsJ2lkLmlyJywnbmV0LmlyJywnb3JnLmlyJywnc2NoLmlyJywnYWMuamUnLCdjby5qZScsJ25ldC5qZScsJ29yZy5qZScsJ2dvdi5qZScsJ2luZC5qZScsJ2plcnNleS5qZScsJ2x0ZC5qZScsJ3NjaC5qZScsJ2NvbS5qbycsJ29yZy5qbycsJ25ldC5qbycsJ2dvdi5qbycsJ2VkdS5qbycsJ21pbC5qbycsJ2FkLmpwJywnYWMuanAnLCdjby5qcCcsJ2dvLmpwJywnb3IuanAnLCduZS5qcCcsJ2dyLmpwJywnZWQuanAnLCdsZy5qcCcsJ25ldC5qcCcsJ29yZy5qcCcsJ2dvdi5qcCcsJ2hva2thaWRvLmpwJywnYW9tb3JpLmpwJywnaXdhdGUuanAnLCdtaXlhZ2kuanAnLCdha2l0YS5qcCcsJ3lhbWFnYXRhLmpwJywnZnVrdXNoaW1hLmpwJywnaWJhcmFraS5qcCcsJ3RvY2hpZ2kuanAnLCdndW5tYS5qcCcsJ3NhaXRhbWEuanAnLCdjaGliYS5qcCcsJ3Rva3lvLmpwJywna2FuYWdhd2EuanAnLCduaWlnYXRhLmpwJywndG95YW1hLmpwJywnaXNoaWthd2EuanAnLCdmdWt1aS5qcCcsJ3lhbWFuYXNoaS5qcCcsJ25hZ2Fuby5qcCcsJ2dpZnUuanAnLCdzaGl6dW9rYS5qcCcsJ2FpY2hpLmpwJywnbWllLmpwJywnc2hpZ2EuanAnLCdreW90by5qcCcsJ29zYWthLmpwJywnaHlvZ28uanAnLCduYXJhLmpwJywnd2FrYXlhbWEuanAnLCd0b3R0b3JpLmpwJywnc2hpbWFuZS5qcCcsJ29rYXlhbWEuanAnLCdoaXJvc2hpbWEuanAnLCd5YW1hZ3VjaGkuanAnLCd0b2t1c2hpbWEuanAnLCdrYWdhd2EuanAnLCdlaGltZS5qcCcsJ2tvY2hpLmpwJywnZnVrdW9rYS5qcCcsJ3NhZ2EuanAnLCduYWdhc2FraS5qcCcsJ2t1bWFtb3RvLmpwJywnb2l0YS5qcCcsJ21peWF6YWtpLmpwJywna2Fnb3NoaW1hLmpwJywnb2tpbmF3YS5qcCcsJ3NhcHBvcm8uanAnLCdzZW5kYWkuanAnLCd5b2tvaGFtYS5qcCcsJ2thd2FzYWtpLmpwJywnbmFnb3lhLmpwJywna29iZS5qcCcsJ2tpdGFreXVzaHUuanAnLCd1dHN1bm9taXlhLmpwJywna2FuYXphd2EuanAnLCd0YWthbWF0c3UuanAnLCdtYXRzdXlhbWEuanAnLCdjb20ua2gnLCduZXQua2gnLCdvcmcua2gnLCdwZXIua2gnLCdlZHUua2gnLCdnb3Yua2gnLCdtaWwua2gnLCdhYy5rcicsJ2NvLmtyJywnZ28ua3InLCduZS5rcicsJ29yLmtyJywncGUua3InLCdyZS5rcicsJ3Nlb3VsLmtyJywna3lvbmdnaS5rcicsJ2NvbS5rdycsJ25ldC5rdycsJ29yZy5rdycsJ2VkdS5rdycsJ2dvdi5rdycsJ2NvbS5sYScsJ25ldC5sYScsJ29yZy5sYScsJ2NvbS5sYicsJ29yZy5sYicsJ25ldC5sYicsJ2VkdS5sYicsJ2dvdi5sYicsJ21pbC5sYicsJ2NvbS5sYycsJ2VkdS5sYycsJ2dvdi5sYycsJ25ldC5sYycsJ29yZy5sYycsJ2NvbS5sdicsJ25ldC5sdicsJ29yZy5sdicsJ2VkdS5sdicsJ2dvdi5sdicsJ21pbC5sdicsJ2lkLmx2JywnYXNuLmx2JywnY29uZi5sdicsJ2NvbS5seScsJ25ldC5seScsJ29yZy5seScsJ2NvLm1hJywnbmV0Lm1hJywnb3JnLm1hJywncHJlc3MubWEnLCdhYy5tYScsJ2NvbS5taycsJ2NvbS5tbScsJ25ldC5tbScsJ29yZy5tbScsJ2VkdS5tbScsJ2dvdi5tbScsJ2NvbS5tbicsJ29yZy5tbicsJ2VkdS5tbicsJ2dvdi5tbicsJ211c2V1bS5tbicsJ2NvbS5tbycsJ25ldC5tbycsJ29yZy5tbycsJ2VkdS5tbycsJ2dvdi5tbycsJ2NvbS5tdCcsJ25ldC5tdCcsJ29yZy5tdCcsJ2VkdS5tdCcsJ3RtLm10JywndXUubXQnLCdjb20ubXgnLCduZXQubXgnLCdvcmcubXgnLCdnb2IubXgnLCdlZHUubXgnLCdjb20ubXknLCdvcmcubXknLCdnb3YubXknLCdlZHUubXknLCduZXQubXknLCdjb20ubmEnLCdvcmcubmEnLCduZXQubmEnLCdhbHQubmEnLCdlZHUubmEnLCdjdWwubmEnLCd1bmFtLm5hJywndGVsZWNvbS5uYScsJ2NvbS5uYycsJ25ldC5uYycsJ29yZy5uYycsJ2FjLm5nJywnZWR1Lm5nJywnc2NoLm5nJywnY29tLm5nJywnZ292Lm5nJywnb3JnLm5nJywnbmV0Lm5nJywnZ29iLm5pJywnY29tLm5pJywnbmV0Lm5pJywnZWR1Lm5pJywnbm9tLm5pJywnb3JnLm5pJywnY29tLm5wJywnbmV0Lm5wJywnb3JnLm5wJywnZ292Lm5wJywnZWR1Lm5wJywnYWMubnonLCdjby5ueicsJ2NyaS5ueicsJ2dlbi5ueicsJ2dlZWsubnonLCdnb3Z0Lm56JywnaXdpLm56JywnbWFvcmkubnonLCdtaWwubnonLCduZXQubnonLCdvcmcubnonLCdzY2hvb2wubnonLCdjb20ub20nLCdjby5vbScsJ2VkdS5vbScsJ2FjLm9tJywnZ292Lm9tJywnbmV0Lm9tJywnb3JnLm9tJywnbW9kLm9tJywnbXVzZXVtLm9tJywnYml6Lm9tJywncHJvLm9tJywnbWVkLm9tJywnY29tLnBhJywnbmV0LnBhJywnb3JnLnBhJywnZWR1LnBhJywnYWMucGEnLCdnb2IucGEnLCdzbGQucGEnLCdlZHUucGUnLCdnb2IucGUnLCdub20ucGUnLCdtaWwucGUnLCdvcmcucGUnLCdjb20ucGUnLCduZXQucGUnLCdjb20ucGcnLCduZXQucGcnLCdhYy5wZycsJ2NvbS5waCcsJ25ldC5waCcsJ29yZy5waCcsJ21pbC5waCcsJ25nby5waCcsJ2FpZC5wbCcsJ2Fncm8ucGwnLCdhdG0ucGwnLCdhdXRvLnBsJywnYml6LnBsJywnY29tLnBsJywnZWR1LnBsJywnZ21pbmEucGwnLCdnc20ucGwnLCdpbmZvLnBsJywnbWFpbC5wbCcsJ21pYXN0YS5wbCcsJ21lZGlhLnBsJywnbWlsLnBsJywnbmV0LnBsJywnbmllcnVjaG9tb3NjaS5wbCcsJ25vbS5wbCcsJ29yZy5wbCcsJ3BjLnBsJywncG93aWF0LnBsJywncHJpdi5wbCcsJ3JlYWxlc3RhdGUucGwnLCdyZWwucGwnLCdzZXgucGwnLCdzaG9wLnBsJywnc2tsZXAucGwnLCdzb3MucGwnLCdzemtvbGEucGwnLCd0YXJnaS5wbCcsJ3RtLnBsJywndG91cmlzbS5wbCcsJ3RyYXZlbC5wbCcsJ3R1cnlzdHlrYS5wbCcsJ2NvbS5waycsJ25ldC5waycsJ2VkdS5waycsJ29yZy5waycsJ2ZhbS5waycsJ2Jpei5waycsJ3dlYi5waycsJ2dvdi5waycsJ2dvYi5waycsJ2dvay5waycsJ2dvbi5waycsJ2dvcC5waycsJ2dvcy5waycsJ2VkdS5wcycsJ2dvdi5wcycsJ3Bsby5wcycsJ3NlYy5wcycsJ2NvbS5wdCcsJ2VkdS5wdCcsJ2dvdi5wdCcsJ2ludC5wdCcsJ25ldC5wdCcsJ25vbWUucHQnLCdvcmcucHQnLCdwdWJsLnB0JywnY29tLnB5JywnbmV0LnB5Jywnb3JnLnB5JywnZWR1LnB5JywnY29tLnFhJywnbmV0LnFhJywnb3JnLnFhJywnZWR1LnFhJywnZ292LnFhJywnYXNzby5yZScsJ2NvbS5yZScsJ25vbS5yZScsJ2NvbS5ybycsJ29yZy5ybycsJ3RtLnJvJywnbnQucm8nLCdub20ucm8nLCdpbmZvLnJvJywncmVjLnJvJywnYXJ0cy5ybycsJ2Zpcm0ucm8nLCdzdG9yZS5ybycsJ3d3dy5ybycsJ2NvbS5ydScsJ25ldC5ydScsJ29yZy5ydScsJ2dvdi5ydScsJ3BwLnJ1JywnY29tLnNhJywnZWR1LnNhJywnc2NoLnNhJywnbWVkLnNhJywnZ292LnNhJywnbmV0LnNhJywnb3JnLnNhJywncHViLnNhJywnY29tLnNiJywnbmV0LnNiJywnb3JnLnNiJywnZWR1LnNiJywnZ292LnNiJywnY29tLnNkJywnbmV0LnNkJywnb3JnLnNkJywnZWR1LnNkJywnc2NoLnNkJywnbWVkLnNkJywnZ292LnNkJywndG0uc2UnLCdwcmVzcy5zZScsJ3BhcnRpLnNlJywnYnJhbmQuc2UnLCdmaC5zZScsJ2Zoc2suc2UnLCdmaHYuc2UnLCdrb21mb3JiLnNlJywna29tbXVuYWxmb3JidW5kLnNlJywna29tdnV4LnNlJywnbGFuYXJiLnNlJywnbGFuYmliLnNlJywnbmF0dXJicnVrc2d5bW4uc2UnLCdzc2huLnNlJywnb3JnLnNlJywncHAuc2UnLCdjb20uc2cnLCduZXQuc2cnLCdvcmcuc2cnLCdlZHUuc2cnLCdnb3Yuc2cnLCdwZXIuc2cnLCdjb20uc2gnLCduZXQuc2gnLCdvcmcuc2gnLCdlZHUuc2gnLCdnb3Yuc2gnLCdtaWwuc2gnLCdnb3Yuc3QnLCdzYW90b21lLnN0JywncHJpbmNpcGUuc3QnLCdjb25zdWxhZG8uc3QnLCdlbWJhaXhhZGEuc3QnLCdvcmcuc3QnLCdlZHUuc3QnLCduZXQuc3QnLCdjb20uc3QnLCdzdG9yZS5zdCcsJ21pbC5zdCcsJ2NvLnN0JywnY29tLnN2Jywnb3JnLnN2JywnZWR1LnN2JywnZ29iLnN2JywncmVkLnN2JywnY29tLnN5JywnbmV0LnN5Jywnb3JnLnN5JywnZ292LnN5JywnYWMudGgnLCdjby50aCcsJ2dvLnRoJywnbmV0LnRoJywnb3IudGgnLCdjb20udG4nLCduZXQudG4nLCdvcmcudG4nLCdlZHVuZXQudG4nLCdnb3YudG4nLCdlbnMudG4nLCdmaW4udG4nLCduYXQudG4nLCdpbmQudG4nLCdpbmZvLnRuJywnaW50bC50bicsJ3JucnQudG4nLCdybnUudG4nLCdybnMudG4nLCd0b3VyaXNtLnRuJywnY29tLnRyJywnbmV0LnRyJywnb3JnLnRyJywnZWR1LnRyJywnZ292LnRyJywnbWlsLnRyJywnYmJzLnRyJywnazEyLnRyJywnZ2VuLnRyJywnY28udHQnLCdjb20udHQnLCdvcmcudHQnLCduZXQudHQnLCdiaXoudHQnLCdpbmZvLnR0JywncHJvLnR0JywnaW50LnR0JywnY29vcC50dCcsJ2pvYnMudHQnLCdtb2JpLnR0JywndHJhdmVsLnR0JywnbXVzZXVtLnR0JywnYWVyby50dCcsJ25hbWUudHQnLCdnb3YudHQnLCdlZHUudHQnLCduaWMudHQnLCd1cy50dCcsJ3VrLnR0JywnY2EudHQnLCdldS50dCcsJ2VzLnR0JywnZnIudHQnLCdpdC50dCcsJ3NlLnR0JywnZGsudHQnLCdiZS50dCcsJ2RlLnR0JywnYXQudHQnLCdhdS50dCcsJ2NvLnR2JywnY29tLnR3JywnbmV0LnR3Jywnb3JnLnR3JywnZWR1LnR3JywnaWR2LnR3JywnZ292LnR3JywnY29tLnVhJywnbmV0LnVhJywnb3JnLnVhJywnZWR1LnVhJywnZ292LnVhJywnYWMudWcnLCdjby51ZycsJ29yLnVnJywnZ28udWcnLCdjby51aycsJ21lLnVrJywnb3JnLnVrJywnZWR1LnVrJywnbHRkLnVrJywncGxjLnVrJywnbmV0LnVrJywnc2NoLnVrJywnbmljLnVrJywnYWMudWsnLCdnb3YudWsnLCduaHMudWsnLCdwb2xpY2UudWsnLCdtb2QudWsnLCdkbmkudXMnLCdmZWQudXMnLCdjb20udXknLCdlZHUudXknLCduZXQudXknLCdvcmcudXknLCdndWIudXknLCdtaWwudXknLCdjb20udmUnLCduZXQudmUnLCdvcmcudmUnLCdjby52ZScsJ2VkdS52ZScsJ2dvdi52ZScsJ21pbC52ZScsJ2FydHMudmUnLCdiaWIudmUnLCdmaXJtLnZlJywnaW5mby52ZScsJ2ludC52ZScsJ25vbS52ZScsJ3JlYy52ZScsJ3N0b3JlLnZlJywndGVjLnZlJywnd2ViLnZlJywnY28udmknLCduZXQudmknLCdvcmcudmknLCdjb20udm4nLCdiaXoudm4nLCdlZHUudm4nLCdnb3Yudm4nLCduZXQudm4nLCdvcmcudm4nLCdpbnQudm4nLCdhYy52bicsJ3Byby52bicsJ2luZm8udm4nLCdoZWFsdGgudm4nLCduYW1lLnZuJywnY29tLnZ1JywnZWR1LnZ1JywnbmV0LnZ1Jywnb3JnLnZ1JywnZGUudnUnLCdjaC52dScsJ2ZyLnZ1JywnY29tLndzJywnbmV0LndzJywnb3JnLndzJywnZ292LndzJywnZWR1LndzJywnYWMueXUnLCdjby55dScsJ2VkdS55dScsJ29yZy55dScsJ2NvbS55ZScsJ25ldC55ZScsJ29yZy55ZScsJ2dvdi55ZScsJ2VkdS55ZScsJ21pbC55ZScsJ2FjLnphJywnYWx0LnphJywnYm91cnNlLnphJywnY2l0eS56YScsJ2NvLnphJywnZWR1LnphJywnZ292LnphJywnbGF3LnphJywnbWlsLnphJywnbmV0LnphJywnbmdvLnphJywnbm9tLnphJywnb3JnLnphJywnc2Nob29sLnphJywndG0uemEnLCd3ZWIuemEnLCdjby56dycsJ2FjLnp3Jywnb3JnLnp3JywnZ292Lnp3JywnZXUub3JnJywnYXUuY29tJywnYnIuY29tJywnY24uY29tJywnZGUuY29tJywnZGUubmV0JywnZXUuY29tJywnZ2IuY29tJywnZ2IubmV0JywnaHUuY29tJywnbm8uY29tJywncWMuY29tJywncnUuY29tJywnc2EuY29tJywnc2UuY29tJywndWsuY29tJywndWsubmV0JywndXMuY29tJywndXkuY29tJywnemEuY29tJywnZGsub3JnJywndGVsLm5vJywnZmF4Lm5yJywnbW9iLm5yJywnbW9iaWwubnInLCdtb2JpbGUubnInLCd0ZWwubnInLCd0bGYubnInLCdlMTY0LmFycGEnLCd6YS5uZXQnLCd6YS5vcmcnXTsKCQkJCQlmb3IodmFyIGk9MDsgaTxUTERMaXN0Lmxlbmd0aDsgaSsrKSB7CgkJCQkJCWlmKFVSST09VExETGlzdFtpXSkgewoJCQkJCQkJVVJJPUhvc3ROYW1lW0hvc3ROYW1lLmxlbmd0aC0zXSsnLicrVVJJOwoJCQkJCQkJYnJlYWs7CgkJCQkJCX0KCQkJCQl9CgkJCQl9CgoJCQkJcmV0dXJuIFVSSTsKCgkJCX0KCgkJCWZ1bmN0aW9uIFNHUExvY2FsKCkgewoKCQkJCXZhciBQYXNzd2Q9ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ1Bhc3N3ZCcpLnZhbHVlOwoJCQkJdmFyIERpc2FibGVUTEQ9KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdEaXNhYmxlVExEJykuY2hlY2tlZCk/dHJ1ZTpmYWxzZTsKCQkJCXZhciBEb21haW49ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ0RvbWFpbicpLnZhbHVlOwoJCQkJdmFyIExlbj1ncDJfdmFsaWRhdGVfbGVuZ3RoKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdMZW4nKS52YWx1ZSk7CgoJCQkJaWYoUGFzc3dkJiZEb21haW4pIHsKCQkJCQlEb21haW49Z3AyX3Byb2Nlc3NfdXJpKERvbWFpbixEaXNhYmxlVExEKTsKCQkJCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnR2VuUGFzc3dkJykudmFsdWU9Z3AyX2dlbmVyYXRlX3Bhc3N3ZChQYXNzd2QrJzonK0RvbWFpbixMZW4pOwoJCQkJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdEb21haW4nKS52YWx1ZT1Eb21haW47CgkJCQkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ0xlbicpLnZhbHVlPUxlbjsKCQkJCX0KCgkJCQlyZXR1cm4gZmFsc2U7CgoJCQl9CgoJCTwvc2NyaXB0PgoKICAgIAk8dGl0bGU+U3VwZXJHZW5QYXNzIE1vYmlsZSBWZXJzaW9uPC90aXRsZT4KCgk8L2hlYWQ+CgoKCTxib2R5PgoKCgkJPGRpdiBpZD0iTW9iaWxlIj4KCgkJCTxoMj48YSBocmVmPSJodHRwOi8vd3d3LnN1cGVyZ2VucGFzcy5jb20vIj5TdXBlckdlblBhc3MuY29tPC9hPjwvaDI+CgoJCQk8bm9zY3JpcHQ+PHAgaWQ9Ildhcm5pbmciPldhcm5pbmc6IEphdmFTY3JpcHQgaXMgZGlzYWJsZWQhPC9wPjwvbm9zY3JpcHQ+CgoJCQk8Zm9ybSBuYW1lPSJNb2JpbGUiIG9uc3VibWl0PSJTR1BMb2NhbCgpOyByZXR1cm4gZmFsc2U7IiBhY3Rpb249Imh0dHA6Ly9sb2NhbGhvc3Q6OS8iIG1ldGhvZD0iUE9TVCI+CgoJCQkJPGg0PjxsYWJlbCBmb3I9IlBhc3N3ZCI+TWFzdGVyIHBhc3N3b3JkPC9sYWJlbD48L2g0PgoJCQkJPHA+PGlucHV0IGlkPSJQYXNzd2QiIG5hbWU9IlBhc3N3ZCIgdHlwZT0icGFzc3dvcmQiIG9uY2hhbmdlPSJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnR2VuUGFzc3dkJykudmFsdWU9Jyc7Ij48L3A+CgoJCQkJPGg0PjxsYWJlbCBmb3I9IkRvbWFpbiI+RG9tYWluIC8gVVJMPC9sYWJlbD48L2g0PgoJCQkJPHA+CgkJCQkJPGlucHV0IGlkPSJEb21haW4iIG5hbWU9IkRvbWFpbiIgdHlwZT0idGV4dCIgb25jaGFuZ2U9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdHZW5QYXNzd2QnKS52YWx1ZT0nJzsiPjxicj4KCQkJCQk8aW5wdXQgaWQ9IkRpc2FibGVUTEQiIG5hbWU9IkRpc2FibGVUTEQiIHR5cGU9ImNoZWNrYm94IiBvbmNoYW5nZT0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ0dlblBhc3N3ZCcpLnZhbHVlPScnOyI+IDxsYWJlbCBpZD0iU21hbGwiIGZvcj0iRGlzYWJsZVRMRCI+RGlzYWJsZSBzdWJkb21haW4gcmVtb3ZhbDwvbGFiZWw+CgkJCQk8L3A+CgoJCQkJPGg0PjxsYWJlbCBmb3I9IkxlbiI+UGFzc3dvcmQgbGVuZ3RoPC9sYWJlbD48L2g0PgoJCQkJPHA+PGlucHV0IGlkPSJMZW4iIG5hbWU9IkxlbiIgdHlwZT0idGV4dCIgc2l6ZT0iMiIgdmFsdWU9IjEyIiBvbmNoYW5nZT0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ0dlblBhc3N3ZCcpLnZhbHVlPScnOyI+IGNoYXJhY3RlcnM8L3A+CgoJCQkJPHA+PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdlbmVyYXRlIj48L3A+CgoJCQkJPGg0PjxsYWJlbCBmb3I9IkdlblBhc3N3ZCI+WW91ciBnZW5lcmF0ZWQgcGFzc3dvcmQ8L2xhYmVsPjwvaDQ+CgkJCQk8cD48aW5wdXQgaWQ9IkdlblBhc3N3ZCIgbmFtZT0iR2VuUGFzc3dkIiB0eXBlPSJ0ZXh0Ij48L3A+CgoJCQk8L2Zvcm0+CgoJCTwvZGl2PgoKCgk8L2JvZHk+Cgo8L2h0bWw%2B">This page encoded in a Data URI</a></p>
			<p>
				<a href="index.fr">En français</a>&#160; 
				<a href="index.es">En español</a>&#160; 
				<a href="index.de">Auf Deutsch</a>&#160; 
				<a href="index.pt-br">No português brasileiro</a>&#160; 
				<a href="index.zh-hk">繁體中文</a>&#160; 
				<a href="index.hu">Magyarul</a>
			</p>
		</div>

	</body>

</html>
