
<html>
<body style ="background-color: #FFFFFF; font-size: 25px;">
<body>

<title>FinanceItAll Stream</title>


<!--
<div id="startStream" style="height:800px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:#CAE1F9">
-->
	
	

<?php 

require __DIR__. '../../../../vendor/autoload.php';
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'tmhOAuthExample.php';
$tmhOAuth = new tmhOAuthExample();


//@washingtonpost
//@business
//@YahooFinance
//@DWSKTrader
//@dennischonAC
//@webapperc
//@DoubleTGolle
$UsersToFollow = array('follow'    => '2467791, 34713362, 19546277, 898400251123453952, 839488222724046852, 842409795462299648, 1328120858');

$symbolGame = array('symbols' => 'AAAP,AABA,AAL,AAME,AAOI,AAON,AAPL,AAWW,AAXJ,AAXN,ABAC,ABAX,ABCB,ABCD,ABDC,ABEO,ABEOW,ABIL,ABIO,ABLX,ABMD,ABTX,ABUS,ACAD,ACBI,ACER,ACERW,ACET,ACFC,ACGL,ACGLO,ACGLP,ACHC,ACHN,ACHV,ACIA,ACIU,ACIW,ACLS,ACMR,ACNB,ACOR,ACRS,ACRX,ACSF,ACST,ACTA,ACTG,ACWI,ACWX,ACXM,ADAP,ADBE,ADES,ADI,ADMA,ADMP,ADMS,ADOM,ADP,ADRA,ADRD,ADRE,ADRO,ADRU,ADSK,ADTN,ADUS,ADVM,ADXS,ADXSW,AEGN,AEHR,AEIS,AEMD,AER,AETI,AEY,AEZS,AFAM,AFH,AFHBL,AFMD,AFSI,AGEN,AGFS,AGFSW,AGII,AGIIL,AG,O,AGLE,AGNC,AGNCB,AGNCN,AGND,AGRX,AGTC,AGYS,AGZD,AHGP,AHPA,AHPAU,AHPAW,AHPI,AIA,AIMC,AIMT,AINV,AIRG,AIRR,AIRT,AKAM,AKAO,AKBA,AKCA,AKER,AK,X,AKTS,AKTX,ALBO,ALCO,ALDR,ALDX,ALGN,ALGT,ALIM,ALJJ,ALKS,ALLT,ALNA,A,NY,ALOG,ALOT,ALPN,ALQA,ALRM,ALRN,ALSK,ALT,ALTR,ALTY,ALXN,AMAG,AMAT,A,BA,AMBC,AMBCW,AMCA,AMCN,AMCX,AMD,AMDA,AMED,AMGN,AMKR,AMMA,AMNB,AMOT,AMOV,AMPH,AMRB,AMRH,AMRHW,AMRK,AMRN,AMRS,AMSC,AMSF,AMSWA,AMTD,AMTX,AM,D,AMZN,ANAB,ANAT,ANCB,ANCX,ANDA,ANDAR,ANDAU,ANDAW,ANDE,ANGI,ANGO,ANI,ANIP,ANSS,ANTH,ANY,AOBC,AOSL,APDN,APDNW,APEI,APEN,APLP,APLS,APOG,AP,P,APOPW,APPF,APPN,APPS,APRI,APTI,APTO,APVO,APWC,AQB,AQMS,AQXP,ARAY,ARCB,ARCC,ARCI,ARCT,ARCW,ARDM,ARDX,AREX,ARGS,ARGX,ARII,ARKR,ARLP,ARLZ,ARNA,AROW,ARQL,ARRS,ARRY,ARTNA,ARTW,ARTX,ARWR,ASCMA,ASET,ASFI,ASMB,AS,L,ASNA,ASND,ASNS,ASPS,ASPU,ASRV,ASRVP,ASTC,ASTE,ASUR,ASV,ASYS,ATAC,ATACR,ATACU,ATAI,ATAX,ATEC,ATHN,ATHX,ATLC,ATLO,ATNI,ATNX,ATOM,ATOS,ATR,ATRC,ATRI,ATRO,ATRS,ATSG,ATTU,ATVI,ATXI,AUBN,AUDC,AUPH,AUTO,AVAV,AV,L,AVEO,AVGO,AVGR,AVHI,AVID,AVIR,AVNW,AVXL,AVXS,AWRE,AXAS,AXDX,AXGN,AON,AXSM,AXTI,AY,AYTU,AZPN,AZRX,BABY,BAND,BANF,BANFP,BANR,BANX,BASI,BATRA,BATRK,BBBY,BBC,BBGI,BBH,BBOX,BBP,BBRG,BBSI,BCAC,BCACR,BCACU,BCACW,BCBP,BCLI,BCOM,BCOR,BCOV,BCPC,BCRX,BCTF,BDGE,BDSI,BEAT,BE,E,BECN,BELFA,BELFB,BFIN,BFIT,BGCP,BGFV,BGNE,BHAC,BHACR,BHACU,BHACW,BHBK,BHF,BIB,BICK,BIDU,BIIB,BIOC,BIOL,BIOS,BIS,BIVV,BJRI,BKCC,BKEP,BKE,P,BKMU,BKSC,BKYI,BL,BLBD,BLCM,BLDP,BLDR,BLFS,BLIN,BLKB,BLMN,BLMT,BLPH,BLRX,BLUE,BLVD,BLVDU,BLVDW,BMCH,BMLP,BMRA,BMRC,BMRN,BMTC,BNCL,BNDX,BNFT,BNSO,BNTC,BNTCW,BOBE,BOCH,BOFI,BOFIL,BOJA,BOKF,BOKFL,B,LD,BOMN,BOOM,BOSC,BOTJ,BOTZ,BOXL,BPFH,BPFHP,BPFHW,BPMC,BPOP,BPOPM,BP,PN,BPRN,BPTH,BPY,BRAC,BRACR,BRACU,BRACW,BREW,BRID,BRKL,BRKR,BRKS,BRPAU,BRQS,BRQSW,BSET,BSF,BSFT,BSPM,BSQR,BSRR,BSTC,BTEC,BUFF,BUR,BURG,BU,E,BV,BVSN,BVXV,BVXVW,BWEN,BWFG,BWINA,BWINB,BWLD,BYBK,BYFC,BYSI,BZUN,CA,CAAS,CAC,CACC,CACG,CADC,CAFD,CAKE,CALA,CALD,CALI,CALL,CALM,CAMP,CA,T,CAPR,CAR,CARA,CARB,CARG,CARO,CART,CARV,CARZ,CASC,CASH,CASI,CASM,CASS,CASY,CATB,CATC,CATH,CATM,CATS,CATY,CATYW,CAVM,CBAK,CBAN,CBAY,CBF,C,FV,CBIO,CBLI,CBMG,CBOE,CBPO,CBRL,CBSH,CBSHP,CBTX,CCBG,CCCL,CCCR,CCD,CCIH,CCLP,CCMP,CCNE,CCOI,CCRC,CCRN,CCUR,CCXI,CDC,CDEV,CDK,CDL,CDNA,CDNS,CDOR,CDTI,CDTX,CDW,CDXC,CDXS,CDZI,CECE,CECO,CELC,CELG,CELGZ,CELH,C,MI,CENT,CENTA,CENX,CERC,CERCW,CERN,CERS,CETV,CETX,CETXP,CETXW,CEVA,C,Y,CEZ,CFA,CFBI,CFBK,CFCO,CFCOU,CFCOW,CFFI,CFFN,CFMS,CFO,CFRX,CG,CGBD,CGEN,CGIX,CGNT,CGNX,CGO,CHCI,CHCO,CHDN,CHEF,CHEK,CHEKW,CHFC,CHFN,CHFS,CHI,CHKE,CHKP,CHMA,CHMG,CHNR,CHRS,CHRW,CHSCL,CHSCM,CHSCN,CHSCO,CHSC,CHTR,CHUBA,CHUBK,CHUY,CHW,CHY,CIBR,CID,CIDM,CIFS,CIGI,CIL,CINF,CIU,CIVB,CIVBP,CIZ,CIZN,CJJD,CKPT,CLAR,CLBS,CLCT,CLDC,CLDX,CLFD,CLIR,CLIR,CLLS,CLMT,CLNE,CLNT,CLRB,CLRBW,CLRBZ,CLRO,CLSD,CLSN,CLUB,CLVS,CLWT,CLXT,CMCO,CMCSA,CMCT,CMCTP,CME,CMFN,CMPR,CMRX,CMSS,CMSSR,CMSSU,CMSSW,CMTA,CMTL,CNAC,CNACR,CNACU,CNACW,CNAT,CNBKA,CNCE,CNCR,CNET,CNFR,CNIT,CNMD,CNOB,CNSL,CNTF,CNTY,CNXN,COBZ,CODA,CODX,COGT,COHR,COHU,COKE,COLB,COLL,COLM,COMM,COMT,CONE,CONN,COOL,CORE,CORI,CORT,COST,COUP,COWN,COWNL,CPAH,CPHC,CPIX,CPL,CPLP,CPRT,CPRX,CPSH,CPSI,CPSS,CPST,CPTA,CPTAG,CPTAL,CRAI,CRAY,CRBP,CRED,CREE,CREG,CRESY,CRIS,CRME,CRMT,CRNT,CROX,CRSP,CRTO,CRUS,CRVL,CRVS,CRWS,CRZO,CSA,CSB,CSBK,CSBR,CSCO,CSF,CSFL,CSGP,CSGS,CSII,CSIQ,CSJ,C,ML,CSOD,CSPI,CSQ,CSSE,CSTE,CSTR,CSWC,CSWI,CSX,CTAS,CTBI,CTG,CTHR,CTI,CTIC,CTMX,CTRE,CTRL,CTRN,CTRP,CTRV,CTSH,CTSO,CTWS,CTXR,CTXRW,CTXS,CUBA,CUBN,CUI,CUR,CUTR,CVBF,CVCO,CVCY,CVGI,CVGW,CVLT,CVLY,CVO,CVTI,CVV,CWAY,CWBC,CWCO,CWST,CXDC,CXRX,CXSE,CY,CYAD,CYAN,CYBE,CYBR,CYCC,CYCCP,CYHHZ,CYOU,CYRN,CYRX,CYRXW,CYTK,CYTR,CYTX,CYTXW,CZFC,CZNC,CZR,CZWI,D,IO,DAKT,DARE,DAVE,DAX,DBVT,DCIX,DCOM,DCPH,DDBI,DELT,DELTW,DENN,DEPO,DERM,DEST,DFBG,DFFN,DFNL,DFRG,DFVL,DFVS,DGICA,DGICB,DGII,DGLD,DGLY,DG,E,DGRS,DGRW,DHIL,DHXM,DIOD,DISCA,DISCB,DISCK,DISH,DJCO,DLBL,DLBS,DLH,DLTH,DLTR,DMLP,DMPI,DMRC,DNBF,DNKN,DORM,DOTA,DOTAR,DOTAU,DOTAW,DOVA,DOX,DRAD,DRIO,DRIOW,DRNA,DRRX,DRYS,DSGX,DSKE,DSKEW,DSLV,DSPG,DSWL,DTEA,DTRM,DTUL,DTUS,DTYL,DTYS,DUSA,DVAX,DVCR,DVY,DWAC,DWAQ,DWAS,DWAT,DW,H,DWFI,DWIN,DWLD,DWLV,DWPP,DWSN,DWTR,DXCM,DXGE,DXJS,DXLG,DXPE,DXPS,D,TR,DXYN,DYNT,DYSL,DZSI,EA,EACQ,EACQU,EACQW,EARS,EBAY,EBAYL,EBIO,EBIX,EBMT,EBSB,EBTC,ECHO,ECOL,ECPG,ECYT,EDAP,EDBI,EDGE,EDGW,EDIT,EDUC,EEF,EEI,EEMA,EFAS,EFBI,EFII,EFOI,EFSC,EGAN,EGBN,EGHT,EGLE,EGLT,EGOV,EGR,EHTH,EIGI,EIGR,EKSO,ELEC,ELECU,ELECW,ELGX,ELON,ELSE,ELTK,EMB,EMCB,E,CF,EMCG,EMCI,EMIF,EMITF,EMKR,EML,EMMS,EMXC,ENDP,ENFC,ENG,ENPH,ENSG,ENT,ENTA,ENTG,ENTL,ENZL,ENZY,EPAY,EPIX,EPZM,EQBK,EQFN,EQIX,EQRR,ERI,ERIC,ERIE,ERII,ERYP,ESBK,ESCA,ESDI,ESDI,ESEA,ESES,ESG,ESGD,ESGE,ESGG,ESGR,ESGU,ESIO,ESLT,ESND,ESPR,ESQ,ESRX,ESSA,ESXB,ETFC,ETSY,EUFN,EVBG,EVEP,EVGBC,EVGN,EVK,EVLMC,EVLV,EVOK,EV,L,EVSTC,EWBC,EWZS,EXAC,EXAS,EXEL,EXFO,EXLS,EXPD,EXPE,EXPO,EXTR,EXXI,EYE,EYEG,EYEGW,EYES,EYESW,EZPW,FAAR,FAB,FAD,FALN,FANG,FANH,FARM,FARO,FAST,FAT,FATE,FB,FBIO,FBIOP,FBIZ,FBMS,FBNC,FBNK,FBSS,FBZ,FCA,FCAL,FCA,FCAP,FCBC,FCCO,FCCY,FCEF,FCEL,FCFS,FCNCA,FCRE,FCSC,FCVT,FDBC,FDEF,F,IV,FDT,FDTS,FDUS,FEIM,FELE,FEM,FEMB,FEMS,FENC,FEP,FEUZ,FEX,FEYE,FFBC,FFBCW,FFBW,FFHL,FFIC,FFIN,FFIV,FFKT,FFNW,FFWM,FGBI,FGEN,FGM,FH,FHB,F,K,FIBK,FINL,FINX,FISI,FISV,FITB,FITBI,FIVE,FIVN,FIXD,FIZZ,FJP,FKO,FK,FLAG,FLAT,FLDM,FLEX,FLGT,FLIC,FLIR,FLKS,FLL,FLN,FLWS,FLXN,FLXS,FMAO,FMB,FMBH,FMBI,FMCI,FMCIR,FMCIU,FMCIW,FMHI,FMI,FMK,FMNB,FNBG,FNGN,FNH,FNJN,FNK,FNKO,FNLC,FNSR,FNTE,FNTEU,FNTEW,FNWB,FNX,FNY,FOANC,FOGO,FO,D,FOMX,FONE,FONR,FORD,FORK,FORM,FORR,FORTY,FOSL,FOX,FOXA,FOXF,FPA,FP,Y,FPRX,FPXI,FRAN,FRBA,FRBK,FRED,FRGI,FRME,FRPH,FRPT,FRSH,FRSX,FRTA,FSAC,FSACU,FSACW,FSBC,FSBW,FSCT,FSFG,FSLR,FSNN,FSTR,FSV,FSZ,FTA,FTAG,F,C,FTCS,FTD,FTEK,FTEO,FTFT,FTGC,FTHI,FTLB,FTNT,FTR,FTRI,FTRPR,FTSL,FT,M,FTW,FTXD,FTXG,FTXH,FTXL,FTXN,FTXO,FTXR,FULT,FUNC,FUND,FUSB,FUV,FV,FVC,FVE,FWONA,FWONK,FWP,FWRD,FYC,FYT,FYX,GABC,GAIA,GAIN,GAINM,GAINN,GAINO,GALE,GALT,GARS,GASS,GBCI,GBDC,GBLI,GBLIL,GBLIZ,GBNK,GBT,GCBC,GCV,Z,GDEN,GDS,GEC,GECC,GECCL,GEMP,GENC,GENE,GENY,GEOS,GERN,GEVO,GFED,GF,GFNCP,GFNSL,GGAL,GHDX,GIFI,GIGM,GIII,GILD,GILT,GLAD,GLADN,GLBL,GLBR,GLBS,GLBZ,GLDD,GLDI,GLMD,GLNG,GLPG,GLPI,GLRE,GLUU,GLYC,GMLP,GMLPP,GN,C,GNCA,GNCMA,GNMA,GNMK,GNMX,GNRX,GNTX,GNTY,GNUS,GOGL,GOGO,GOLD,GOOD,GOODM,GOODO,GOODP,GOOG,GOOGL,GOV,GOVNI,GPAC,GPACU,GPACW,GPIC,GPOR,GPP,GPRE,GPRO,GRBK,GRFS,GRID,GRIF,GRMN,GROW,GRPN,GRVY,GSBC,GSHT,GSHTU,GSHTW,GSIT,GSM,GSUM,GSVC,GT,GTHX,GTIM,GTLS,GTXI,GTYH,GTYHU,GTYHW,GULF,G,RE,GWGH,GWPH,GWRS,GYRO,HA,HABT,HAFC,HAIN,HAIR,HALL,HALO,HAS,HAWK,HAY,HBAN,HBANN,HBANO,HBANP,HBCP,HBHC,HBHCL,HBIO,HBK,HBMD,HBNC,HBP,HCAP,HCAPZ,HCCI,HCKT,HCM,HCOM,HCSG,HDNG,HDP,HDS,HDSN,HEAR,HEBT,HEES,HELE,HEWG,HFBC,HFBL,HFWA,HGSH,HIBB,HIFS,HIHO,HIIQ,HIMX,HLG,HLIT,HLNE,HMHC,H,NF,HMNY,HMST,HMSY,HMTA,HMTV,HNNA,HNRG,HOFT,HOLI,HOLX,HOMB,HONE,HOPE,HOVNP,HPJ,HPT,HQCL,HQY,HRTX,HRZN,HSGX,HSIC,HSII,HSKA,HSNI,HSON,HSTM,H,BI,HTBK,HTBX,HTGM,HTHT,HTLD,HTLF,HUBG,HUNT,HUNTU,HUNTW,HURC,HURN,HVBC,HWBK,HWCC,HWKN,HX,HYAC,HYACU,HYACW,HYGS,HYLS,HYND,HYXE,HYZD,HZNP,IA,IAM,IAMXR,IAMXW,IART,IBB,IBCP,IBKC,IBKCO,IBKCP,IBKR,IBOC,IBTX,IBUY,ICAD,ICBK,ICCC,ICCH,ICFI,ICHR,ICLN,ICLR,ICON,ICPT,ICUI,IDCC,IDLB,IDRA,IDSA,IDSY,IDTI,IDXG,IDXX,IEF,IEI,IEP,IESC,IEUS,IFEU,IFGL,IFMK,IFON,I,RX,IFV,IGF,IGLD,IGOV,III,IIIN,IIJI,IIN,IIVI,IJT,IKNX,ILG,ILMN,IMDZ,I,GN,IMI,IMKTA,IMMR,IMMU,IMMY,IMNP,IMOS,IMPV,IMRN,IMRNW,IMTE,INAP,INBK,INBKL,INCR,INCY,INDB,INDU,INDUU,INDUW,INDY,INFI,INFN,INFO,INFR,INGN,INO,INOD,INOV,INPX,INSE,INSG,INSM,INSY,INTC,INTG,INTL,INTU,INTX,INVA,INVE,INWK,IONS,IOSP,IOTS,IOVA,IPAR,IPAS,IPCC,IPCI,IPDN,IPGP,IPHS,IPKW,IPWR,IPXL,IRBT,IRCP,IRDM,IRDMB,IRIX,IRMD,IROQ,IRTC,IRWD,ISBC,ISCA,ISHG,ISIG,ISM,ISNS,ISRG,ISRL,ISSC,ISTB,ISTR,ITCI,ITEK,ITEQ,IT,ITIC,ITRI,ITRN,ITUS,IUSB,IUSG,IUSV,IVAC,IVENC,IVFGC,IVFVC,IVTY,IXUS,IXYS,IZEA,JACK,JAGX,JAKK,JASN,JASNW,JASO,JAZZ,JBHT,JBLU,JBSS,JCOM,JC,JCTCF,JD,JJSF,JKHY,JKI,JMBA,JMU,JNCE,JNP,JOBS,JOUT,JRJC,JRVR,JSM,JS,D,JSML,JSYN,JSYNR,JSYNU,JSYNW,JTPY,JUNO,JVA,JXSB,JYNT,KAAC,KAACU,KAA,W,KALA,KALU,KALV,KANG,KBAL,KBLM,KBLMR,KBLMU,KBLMW,KBSF,KBWB,KBWD,KBW,KBWR,KBWY,KCAP,KCAPL,KE,KELYA,KELYB,KEQU,KERX,KEYW,KFFB,KFRC,KGJI,KHC,KIDS,KIN,KINS,KIRK,KLAC,KLIC,KLXI,KMDA,KMPH,KNDI,KNSL,KONA,KONE,KO,L,KOPN,KOSS,KPTI,KRMA,KRNT,KRNY,KRYS,KTCC,KTEC,KTOS,KTOV,KTOVW,KTWO,KURA,KVHI,KWEB,KZIA,LABL,LAKE,LALT,LAMR,LANC,LAND,LANDP,LARK,LAUR,LAW,LAYN,LBAI,LBIX,LBRDA,LBRDK,LBTYA,LBTYB,LBTYK,LCA,LCAHU,LCAHW,LCNB,LCUT,LDRI,LE,LECO,LEDS,LENS,LEXEA,LEXEB,LFUS,LFVN,LGCY,LGCYO,LGCYP,LGI,LGND,LHCG,LIFE,LILA,LILAK,LINC,LIND,LINDW,LINK,LINU,LION,LITE,LIVE,LIVN,LJPC,LKFN,LKOR,LKQ,LLEX,LLIT,LLNW,LMAT,LMB,LMBS,LMFA,LMFAW,LMNR,LMNX,LMRK,LMRKO,LMRKP,LNCE,LNDC,LNGR,LNTH,LOAN,LOB,LOCO,LOGI,LOGM,LONE,LOOP,LOPE,LORL,LOXO,LPCN,LPLA,LPNT,LPSN,LPTH,LPTX,LQDT,LRAD,LRCX,LR,E,LSBK,LSCC,LSTR,LSXMA,LSXMB,LSXMK,LTBR,LTEA,LTRPA,LTRPB,LTRX,LTXB,L,LU,LUNA,LVHD,LVNTA,LVNTB,LWAY,LXRX,LYL,LYTS,MACK,MACQ,MACQU,MACQW,MAGS,MAMS,MANH,MANT,MAR,MARA,MARK,MARPS,MASI,MAT,MATR,MATW,MAYS,MB,MBB,MBCN,MBFI,MBFIO,MBFIP,MBII,MBIN,MBIO,MBOT,MBRX,MBSD,MBTF,MBUU,MBVX,MB,M,MCBC,MCEF,MCEP,MCFT,MCHI,MCHP,MCHX,MCRB,MCRI,MDB,MDCA,MDCO,MDGL,MD,S,MDIV,MDLZ,MDRX,MDSO,MDWD,MDXG,MEDP,MEET,MEIP,MELI,MELR,MEOH,MERC,MESO,METC,MFIN,MFINL,MFNC,MFSF,MGCD,MGEE,MGEN,MGI,MGIC,MGLN,MGNX,MGPI,MGRC,MGYR,MHLD,MICT,MICTW,MIDD,MIII,MIIIU,MIIIW,MIK,MILN,MIME,MIND,MI,DP,MINI,MITK,MITL,MKSI,MKTX,MLAB,MLCO,MLHR,MLNK,MLNT,MLNX,MLVF,MMAC,MMDM,MMDMR,MMDMU,MMDMW,MMLP,MMSI,MMYT,MNDO,MNGA,MNKD,MNOV,MNRO,MNST,MNTA,MNTX,MOBL,MOFG,MOGLC,MOMO,MORN,MOSY,MOXC,MPAA,MPAC,MPACU,MPACW,MP,MPCT,MPVD,MPWR,MRAM,MRBK,MRCC,MRCY,MRDN,MRDNW,MRLN,MRNS,MRSN,MRTN,M,TX,MRUS,MRVL,MSBF,MSBI,MSCC,MSDI,MSDIW,MSEX,MSFG,MSFT,MSG,MSON,MSTR,MTBC,MTBCP,MTCH,MTEM,MTEX,MTFB,MTFBW,MTGE,MTGEP,MTLS,MTP,MTRX,MTSC,MT,I,MTSL,MU,MVIS,MXIM,MXWL,MYGN,MYL,MYND,MYNDW,MYOK,MYOS,MYRG,MYSZ,MZO,NAII,NAKD,NANO,NAOV,NATH,NATI,NATR,NAUH,NAVG,NAVI,NBEV,NBIX,NBN,NBR,NBTB,NCBS,NCLH,NCMI,NCNA,NCOM,NCSM,NCTY,NDAQ,NDLS,NDRA,NDRAW,NDSN,NEO,NEOG,NEON,NEOS,NEOT,NEPT,NERV,NESR,NESRW,NETE,NEWA,NEWS,NEWT,NEWTL,NEWTZ,NEXT,NEXTW,NFBK,NFEC,NFLX,NGHC,NGHCN,NGHCO,NGHCP,NGHCZ,NH,NHLD,NHLDW,NHTC,NICE,NICK,NIHD,NITE,NK,NKSH,NKTR,NLNK,NLST,NMIH,NMRX,NNBR,NNDM,NODK,NOVN,NOVT,NRCIA,NRCIB,NRIM,NSEC,NSIT,NSSC,NSTG,NSYS,NTAP,NTCT,NTEC,NTES,NTGR,NTIC,NTLA,NTNX,NTRA,NTRI,NTRP,NTRS,NTRSP,NTWK,NUAN,NURO,NUROW,NUVA,NVAX,NVCN,NVCR,NVDA,NVEC,NVEE,NVFY,NVIV,NVLN,NVMI,NV,R,NVUS,NWBI,NWFL,NWLI,NWPX,NWS,NWSA,NXEO,NXEOU,NXEOW,NXPI,NXST,NXTD,NXTDW,NXTM,NYMT,NYMTN,NYMTO,NYMTP,NYMX,NYNY,OACQ,OACQR,OACQU,OACQW,OA,M,OBAS,OBCI,OBLN,OBSV,OCC,OCFC,OCLR,OCRX,OCSI,OCSL,OCSLL,OCUL,ODFL,O,P,OESX,OFED,OFIX,OFLX,OFS,OHAI,OHGI,OHRP,OIIM,OKDCC,OKTA,OLBK,OLD,OL,D,OLLI,OMAB,OMCL,OMED,OMER,OMEX,OMNT,ON,ONB,ONCE,ONCS,ONEQ,ONS,ONSIW,ONSIZ,ONTX,ONTXW,ONVO,OPB,OPGN,OPGNW,OPHC,OPHT,OPK,OPNT,OPOF,OPTN,OP,T,ORBC,ORBK,OREX,ORG,ORIG,ORIT,ORLY,ORMP,ORPN,ORRF,OSBC,OSBCP,OSIS,O,N,OSPR,OSPRU,OSPRW,OSTK,OSUR,OTEL,OTEX,OTIC,OTIV,OTTR,OTTW,OVAS,OVBC,OVID,OVLY,OXBR,OXBRW,OXFD,OXLC,OXLCM,OXLCO,OZRK,PAAS,PACB,PACW,PAGG,PAHC,PANL,PATI,PATK,PAVM,PAVMW,PAYX,PBBI,PBCT,PBCTP,PBHC,PBIB,PBIP,PB,D,PBNC,PBPB,PBSK,PBYI,PCAR,PCH,PCLN,PCMI,PCO,PCOM,PCRX,PCSB,PCTI,PCT,PCYG,PCYO,PDBC,PDCE,PDCO,PDEX,PDFS,PDLB,PDLI,PDP,PDVW,PEBK,PEBO,PEG,PEGI,PEIX,PENN,PERI,PERY,PESI,PETQ,PETS,PETX,PETZ,PEY,PEZ,PFBC,PFBI,PFBX,PFF,PFI,PFIE,PFIN,PFIS,PFLT,PFM,PFMT,PFPT,PFSW,PGC,PGJ,PGLC,PGN,PGTI,PHII,PHIIK,PHO,PI,PICO,PID,PIE,PIH,PINC,PIO,PIRS,PIXY,PIZ,PKBK,PKOH,PKW,PLAB,PLAY,PLBC,PLCE,PLPC,PLPM,PLSE,PLUG,PLUS,PLW,PLXP,PLXS,PLYA,PMBC,PMD,PME,PMOM,PMPT,PMTS,PNBK,PNFP,PNK,PNNT,PNQI,PNRG,PNTR,PO,D,POLA,POOL,POPE,POWI,POWL,PPBI,PPC,PPH,PPHM,PPHMP,PPIH,PPSI,PRAA,PR,H,PRAN,PRCP,PRFT,PRFZ,PRGS,PRGX,PRIM,PRKR,PRMW,PRN,PROV,PRPH,PRPO,PR,R,PRSC,PRSS,PRTA,PRTK,PRTO,PRTS,PSAU,PSC,PSCC,PSCD,PSCE,PSCF,PSCH,PSCI,PSCM,PSCT,PSCU,PSDO,PSDV,PSEC,PSET,PSL,PSMT,PSTB,PSTI,PTC,PTCT,PTE,PTF,PTGX,PTH,PTI,PTIE,PTLA,PTNR,PTSI,PTX,PUB,PUI,PULM,PVAC,PVAL,PVB,PWOD,PXI,PXLW,PXS,PXUS,PY,PYDS,PYPL,PYZ,PZRX,PZZA,QABA,QADA,QADB,QA,QBAK,QCLN,QCOM,QCRH,QDEL,QGEN,QINC,QIWI,QLC,QLYS,QNST,QQEW,QQQ,QQQC,QQQX,QQXT,QRHC,QRVO,QSII,QTEC,QTNA,QTNT,QTRH,QUIK,QUMU,QURE,QVCA,QVC,QYLD,RADA,RAIL,RAND,RARE,RARX,RAVE,RAVN,RBB,RBBN,RBCAA,RBCN,RBPAA,R,II,RCKY,RCM,RCMT,RCON,RDCM,RDFN,RDHL,RDI,RDIB,RDNT,RDUS,RDVY,RDWR,RECN,REDU,REFR,REGI,REGN,REIS,RELL,RELV,REPH,RESN,RETA,RETO,REXX,RFAP,RFDI,RFEM,RFEU,RFIL,RGCO,RGEN,RGLD,RGLS,RGN,RGSE,RIBT,RIBTW,RICK,RIGL,RILY,RILYL,RILYZ,RING,RIOT,RKDA,RLJE,RLOG,RMBL,RMBS,RMCF,RMGN,RMNI,RMR,RMTI,RNDB,RNDM,RNDV,RNEM,RNET,RNLC,RNMC,RNSC,RNST,RNWK,ROBO,ROCK,ROIC,ROKA,ROKU,ROLL,ROSE,ROSEU,ROSEW,ROSG,ROST,RP,RPD,RPRX,RPXC,RRD,RRGB,RRR,RSLS,RSYS,RTIX,RTRX,RTTR,RUN,RUSHA,RUSH,RUTH,RVEN,RVLT,RVNC,RVSB,RWLK,RXDX,RXII,RXIIW,RYAAY,RYTM,SABR,SAEX,S,FM,SAFT,SAGE,SAIA,SAL,SALM,SAMG,SANM,SANW,SASR,SATS,SAUC,SAVE,SBAC,SBBP,SBBX,SBCF,SBCP,SBFG,SBFGP,SBGI,SBLK,SBLKL,SBLKZ,SBNY,SBNYW,SBOT,SBP,SBRA,SBRAP,SBSI,SBT,SBUX,SCAC,SCACU,SCACW,SCHL,SCHN,SCKT,SCMP,SCON,S,PH,SCSC,SCVL,SCWX,SCYX,SCZ,SDVY,SEAC,SECO,SEDG,SEED,SEIC,SELB,SELF,SE,EA,SENEB,SFBC,SFBS,SFIX,SFLY,SFM,SFNC,SFST,SGBX,SGC,SGEN,SGH,SGLB,SGLBW,SGMA,SGMO,SGMS,SGOC,SGQI,SGRP,SGRY,SGYP,SHBI,SHEN,SHIP,SHIPW,SHLD,S,LDW,SHLM,SHLO,SHOO,SHOS,SHPG,SHSP,SHV,SHY,SIEB,SIEN,SIFI,SIFY,SIGI,SI,M,SILC,SIMO,SINA,SINO,SIR,SIRI,SITO,SIVB,SIVBO,SKIS,SKLN,SKOR,SKYS,SKYW,SKYY,SLAB,SLCT,SLGN,SLIM,SLM,SLMBP,SLNO,SLNOW,SLP,SLQD,SLRC,SLVO,SM,C,SMBK,SMCI,SMCP,SMED,SMIT,SMMF,SMMT,SMPL,SMPLW,SMRT,SMSI,SMTC,SMTX,S,AK,SNBC,SNBR,SNCR,SND,SNDE,SNDX,SNES,SNFCA,SNGX,SNGXW,SNH,SNHNI,SNHNL,SNHY,SNI,SNLN,SNMX,SNNA,SNOA,SNOAW,SNPS,SNSR,SNSS,SOCL,SODA,SOFO,SOHO,SOHOB,SOHOO,SOHU,SONA,SONC,SORL,SOXX,SP,SPAR,SPCB,SPEX,SPHS,SPI,SPIL,SPKE,SPKEP,SPLK,SPNE,SPNS,SPOK,SPPI,SPRO,SPRT,SPSC,SPTN,SPWH,SPWR,SQBG,SQLV,SQQQ,SQZZ,SRAX,SRCE,SRCL,SRCLP,SRDX,SRET,SREV,SRNE,SRPT,SRRA,SRT,SRTSW,SRUN,SRUNU,SRUNW,SSB,SSBI,SSC,SSFN,SSKN,SSNC,SSNT,SSRM,SSTI,SSYS,STAA,STAF,STB,STBA,STBZ,STDY,STFC,STKL,STKS,STLD,STLR,STLRU,STLRW,S,LY,STML,STMP,STNLU,STPP,STRA,STRL,STRM,STRS,STRT,STX,SUMR,SUNS,SUNW,S,PN,SUSB,SUSC,SVA,SVBI,SVRA,SVVC,SWIN,SWIR,SWKS,SYBT,SYBX,SYKE,SYMC,SYMX,SYNA,SYNC,SYNL,SYNT,SYPR,SYRS,TA,TACO,TACOW,TACT,TAIT,TANH,TANNI,TA,NL,TANNZ,TAPR,TAST,TATT,TAX,TAYD,TBBK,TBK,TBNK,TBPH,TCBI,TCBIL,TCBIP,TCBIW,TCBK,TCCO,TCFC,TCGP,TCMD,TCON,TCPC,TCRD,TCX,TDIV,TEAM,TECD,TECH,TEDU,TELL,TENX,TERP,TESO,TESS,TFSL,TGA,TGEN,TGLS,TGTX,THFF,THRM,THST,TICC,TICCL,TIG,TIL,TILE,TIPT,TISA,TITN,TIVO,TLF,TLGT,TLND,TLT,TMUS,TMUS,TNAV,TNDM,TNTR,TNXP,TOCA,TOPS,TORM,TOUR,TOWN,TPIC,TPIV,TQQQ,TRCB,TRCH,TREE,TRHC,TRIB,TRIL,TRIP,TRMB,TRMK,TRMT,TRNC,TRNS,TROV,TRO,TRPX,TRS,TRST,TRUP,TRVG,TRVN,TSBK,TSC,TSCO,TSEM,TSG,TSLA,TSRI,TSRO,T,TTD,TTEC,TTEK,TTGT,TTMI,TTNP,TTOO,TTPH,TTS,TTWO,TUES,TUR,TURN,TUSA,TUSK,TVIX,TVIZ,TVTY,TWIN,TWMC,TWNK,TWNKW,TWOU,TXMD,TXN,TXRH,TYHT,TYME,TYPE,TZOO,UAE,UBCP,UBFO,UBIO,UBNK,UBNT,UBOH,UBSH,UBSI,UCBA,UCBI,UCFC,U,TT,UDBI,UEIC,UEPS,UFCS,UFPI,UFPT,UG,UGLD,UHAL,UIHC,ULBI,ULH,ULTA,ULTI,UMBF,UMPQ,UNAM,UNB,UNFI,UNIT,UNTY,UONE,UONEK,UPL,UPLD,URBN,URGN,USAK,USAP,USAT,USATP,USAU,USCR,USEG,USLB,USLM,USLV,USMC,USOI,UTHR,UTMD,UTSI,UVSP,VALU,VALX,VBFC,VBIV,VBLT,VBND,VBTX,VCEL,VCIT,VCLT,VCSH,VCYT,VDSI,VDTH,VEAC,VEACU,VEACW,VECO,VEON,VERI,VERU,VGIT,VGLT,VGSH,VIA,VIAB,VIA,VICL,VICR,VIDI,VIGI,VIIX,VIIZ,VIRC,VIRT,VIVE,VIVO,VKTX,VKTXW,VLGEA,VLRX,VMBS,VNDA,VNET,VNOM,VNQI,VOD,VONE,VONG,VONV,VOXX,VRA,VRAY,VREX,VRI,VRML,VRNA,VRNS,VRNT,VRSK,VRSN,VRTS,VRTSP,VRTU,VRTX,VSAR,VSAT,VSDA,VS,C,VSMV,VSTM,VTC,VTGN,VTHR,VTIP,VTL,VTNR,VTVT,VTWG,VTWO,VTWV,VUSE,VUZI,VVPR,VVUS,VWOB,VXUS,VYGR,VYMI,WABC,WAFD,WAFDW,WASH,WATT,WB,WBA,WCFB,WDAY,WDC,WDFC,WEB,WEBK,WEN,WERN,WETF,WEYS,WFBI,WHF,WHFBL,WHLM,WHLR,WHLR,WHLRP,WHLRW,WIFI,WILC,WIN,WINA,WING,WINS,WIRE,WIX,WKHS,WLB,WLDN,WLFC,WLTW,WMGI,WMGIZ,WMIH,WNEB,WOOD,WPCS,WPRT,WRLD,WRLS,WRLSR,WRLSU,WRLSW,WSBC,WSBF,WSCI,WSFS,WSTG,WSTL,WTBA,WTFC,WTFCM,WTFCW,WVE,WVFC,WVVI,WVVI,WWD,WWR,WYIG,WYIGU,WYIGW,WYNN,XBIO,XBIT,XBKS,XCRA,XELA,XELB,XENE,XEN,XGTI,XGTIW,XIV,XLNX,XLRN,XNCR,XNET,XOG,XOMA,XONE,XPER,XPLR,XRAY,XT,X,LB,YDIV,YECO,YERR,YGYI,YIN,YLCO,YLDE,YNDX,YOGA,YORW,YRCW,YTEN,YTRA,YY,Z,ZAGG,ZAIS,ZBIO,ZBRA,ZEAL,ZEUS,ZFGN,ZG,ZGNX,ZION,ZIONW,ZIONZ,ZIOP,ZI,ZIXI,ZKIN,ZLAB,ZN,ZNGA');

function autolink($str, $attributes=array()){
  $attrs = '';
  foreach ($attributes as $attribute => $value) {
    $attrs .= " {$attribute}=\"{$value}\"";
  }
  $str = ' ' . $str;
  $str = preg_replace(
    '`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i',
    '$1<a href="$2"'.$attrs.'>$2</a>',
    $str
  );
  $str = substr($str, 1);
  
  return $str;
}

function getResults($json){
  $results = array();
  foreach($json["results"] as $e){
      //clean up wierd characters
      $clean = preg_replace('/[^(\x20-\x7F)\x0A]*/','', $e['text']);
      $text = autolink($clean);
      $results[] = $text;
  }
  return $results;
}

function removeSimilar($results){
  $return = array();
  foreach($results as $a){
    $check = 0;
    foreach($results as $b){
      if($a != $b){
        similar_text($a, $b, $sim);
        if($sim > 70){
          //similarity to other elements based on 70
          $check = 1; 
        }
      }
    }
    if($check == 0){
      $return[] = $a;
    }
  }
  return $return;
}


function my_streaming_callback($data, $length, $metrics) {
  $file = __DIR__.'/metrics.txt';


//------------WORKING CODE---------------------//
 
//Users (USER IDs) to follow, a comma seperated list
global $UsersToFollow;
global $symbolGame;
global $symbol;

$users = $UsersToFollow["follow"];
$symbols = $symbolGame["symbols"];

//Array list of users to check and make sure only original tweets are coming in
$checkUsers = explode( ', ', $users );

 
//Json formatted tweet
$tweet = $data .PHP_EOL;

//Transfers json String into an array for easy access
$tweetsArray = json_decode($tweet, true);

      if(strpos($tweetsArray['text'], '@washingtonpost') !== false)
        $symbol = 'NYSE:GHC';

       if(stripos($tweetsArray['text'], 'Apple') !== false)
         $symbol = 'APPL';
       else if(stripos($tweetsArray['text'], 'Google') !== false)
         $symbol = 'GOOGL';
       else if(stripos($tweetsArray['text'], 'Nvidia') !== false || stripos($tweetsArray['text'], 'NVIDIA') !== false)
         $symbol = 'NVDA';
       else if(stripos($tweetsArray['text'], 'Microsoft') !== false)
         $symbol = 'MSFT';
       else if(stripos($tweetsArray['text'], 'Bank of America') !== false || stripos($tweetsArray['text'], 'Bank Of America') !== false)
         $symbol = 'BAC';
       else if(stripos($tweetsArray['text'], 'Amazon') !== false)
         $symbol = 'AMZN';
       else if(stripos($tweetsArray['text'], 'Facebook') !== false)
         $symbol = 'FB';
       else if(stripos($tweetsArray['text'], 'Johnson & Johnson') !== false || stripos($tweetsArray['text'], 'Johnson and Johnson') !== false || stripos($tweetsArray['text'], 'J&J') !== false || stripos($tweetsArray['text'], 'J & J') !== false)
         $symbol = 'JNJ';
       else if(stripos($tweetsArray['text'], 'Exxon') !== false)
         $symbol = 'XOM';
       else if(stripos($tweetsArray['text'], 'J.P.Morgan') !== false || stripos($tweetsArray['text'], 'J. P. Morgan') !== false || stripos($tweetsArray['text'], 'J.P. Morgan') !== false)
         $symbol = 'JPM';
       else if(stripos($tweetsArray['text'], 'Wells Fargo & Corp.') !== false || strpos($tweetsArray['text'], 'Wells Fargo') !== false || strpos($tweetsArray['text'], 'Wells Fargo & Corporation') !== false || strpos($tweetsArray['text'], 'Wells Fargo and Corporation') !== false)
         $symbol = 'WFC';
       else if(stripos($tweetsArray['text'], 'Walmart') !== false)
         $symbol = 'WALM34';
       else
          $symbol = '';
//$results = getResults($tweetsArray);
//$clean = removeSimilar($results);

/*echo "<ul>";
foreach($clean as $a){
     echo "<li>".$a."</li>";
}
echo "</ul>";*/
//foreach($checkUsers as $follows)
//{
		//Only stream this tweet if the owner of the tweet matches the user id
		//if( $tweetsArray['user']['id'] == $follows)
		//{
			//Displays the screen name of the user who tweeted

  //OLD WAY TO POPULATE TWEETS!!! REALLY SLOW!
    // if(substr($tweetsArray['text'], 0, 2) !== "RT"){
    //   echo $tweetsArray['user']['screen_name'];
    //   echo ': ';
    //   //Displays the text of the tweet, followed by a line break
    //   echo $tweetsArray['text'] . "<br>" . PHP_EOL; 
    // }
  //Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->Tweetdemo;
	   
	   //Select collection
	   $collection = $db->selectCollection('tweetfeed');
		
		//Insert tweet into database
		$doc = $collection->insertOne (["Screen Name" => $tweetsArray['user']['screen_name'], "text" => $tweetsArray['text'], "symbol" => $symbol]);
	//	}

    $cursor = $collection->find();
    $count = 0;
    foreach($cursor as $doc)
    {
      if(substr($doc['text'], 0, 2) !== "RT"){
       echo '<div style ="border: 5px solid #aaa;">';
       echo $doc['symbol'] . ': ';
       
       echo $doc['Screen Name'] .  ': ';
       //Displays the text of the tweet, followed by a line break
       
       echo  $doc['text'] . "<br>" . PHP_EOL; 
        echo '</div>';

     }
     else
      $count = $count + 1;
    }
//}
//---------------------------------------------//

//--------------DO NOT DELETE THE BELOW CODE SECTION----------------//

  //echo json_decode($data, true);// .PHP_EOL;
  /*if (!is_null($metrics)) {
    if (!file_exists($file)) {
      $line = 'time' . "\t" . implode("\t", array_keys($metrics)) . PHP_EOL;
      file_put_contents($file, $line);
    }
    $line = time(oid)me() . "\t" . implode("\t", $metrics) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND);
  }*/

//--------------DO NOT DELETE THE ABOVE CODE SECTION----------------//  


  return file_exists(dirname(__FILE__) . '/STOP');
}

//$twitter_feed = array();

/*
$api_url = "https://api.twitter.com/1.1/statuses/filter.json/".$twitter['user'].
  ".json?include_entities=".$twitter['entities'].
  "&include_rts=".$twitter['retweet'].
  "&exclude_replies=".$twitter['exclude_replies'].
  "&contributor_details=".$twitter['contributor_details'].
  "&trim_user=".$twitter['trim_user'].
  "&count=".$twitter['count'];
 
// obtain the results 
 
//$json = file_get_contents($api_url, true);
 
// decode the json response as a PHP array
 
//$decode = json_decode($json, true); */


//Washington Post and ESPN ///Use comma seperated list for followers


$code = $tmhOAuth->streaming_request(
  'POST',
  'https://stream.twitter.com/1.1/statuses/filter.json',
  $UsersToFollow,
  'my_streaming_callback'
);
$tmhOAuth->render_response();
?>

<!--Telisha Everett's Code 
function stop() {
    sourceElement.setAttribute("empty", "");
    mongoSearch.stop();
    //stop mongo
    mongoSearch(function () { 
        loadTweets.stop(); // This stops the stream from downloading
    });-->


</div>

</body>
</html>