<?php

namespace Viewi;

require 'BreakCondition.php';
require 'BaseFunctionConverter.php';
require 'Functions/JsCount.php';
require 'Functions/JsPrintR.php';
require 'Functions/JsEcho.php';
require 'Functions/JsArrayPop.php';
require 'Functions/JsInArray.php';
require 'Functions/JsImplode.php';
require 'Functions/JsStrLen.php';

require 'Functions/Strings/StrSplit.php';
require 'Functions/Strings/Htmlentities.php';
require 'Functions/Ctype/CtypeAlnum.php';
require 'Functions/Ctype/CtypeSpace.php';
require 'Functions/Ctype/CtypeUpper.php';

// ##autogenerated
require 'Functions/_helpers/Bc.php';
require 'Functions/_helpers/PhpCastString.php';
require 'Functions/_helpers/PhpCastFloat.php';
require 'Functions/_helpers/PhpCastInt.php';
require 'Functions/Arrays/ArrayChangeKeyCase.php';
require 'Functions/Arrays/ArrayChunk.php';
require 'Functions/Arrays/ArrayColumn.php';
require 'Functions/Arrays/ArrayCombine.php';
require 'Functions/Arrays/ArrayCountValues.php';
require 'Functions/Arrays/ArrayDiff.php';
require 'Functions/Arrays/ArrayDiffAssoc.php';
require 'Functions/Arrays/ArrayDiffKey.php';
require 'Functions/Arrays/ArrayDiffUassoc.php';
require 'Functions/Arrays/ArrayDiffUkey.php';
require 'Functions/Arrays/ArrayFill.php';
require 'Functions/Arrays/ArrayFillKeys.php';
require 'Functions/Arrays/ArrayFilter.php';
require 'Functions/Arrays/ArrayFlip.php';
require 'Functions/Arrays/ArrayIntersect.php';
require 'Functions/Arrays/ArrayIntersectAssoc.php';
require 'Functions/Arrays/ArrayIntersectKey.php';
require 'Functions/Arrays/ArrayIntersectUassoc.php';
require 'Functions/Arrays/ArrayIntersectUkey.php';
require 'Functions/Arrays/ArrayKeyExists.php';
require 'Functions/Arrays/ArrayKeys.php';
require 'Functions/Arrays/ArrayMap.php';
require 'Functions/Arrays/ArrayMerge.php';
require 'Functions/Arrays/ArrayMergeRecursive.php';
require 'Functions/Arrays/ArrayMultisort.php';
require 'Functions/Arrays/ArrayPad.php';
require 'Functions/Arrays/ArrayPop.php';
require 'Functions/Arrays/ArrayProduct.php';
require 'Functions/Arrays/ArrayPush.php';
require 'Functions/Arrays/ArrayRand.php';
require 'Functions/Arrays/ArrayReduce.php';
require 'Functions/Arrays/ArrayReplace.php';
require 'Functions/Arrays/ArrayReplaceRecursive.php';
require 'Functions/Arrays/ArrayReverse.php';
require 'Functions/Arrays/ArraySearch.php';
require 'Functions/Arrays/ArrayShift.php';
require 'Functions/Arrays/ArraySlice.php';
require 'Functions/Arrays/ArraySplice.php';
require 'Functions/Arrays/ArraySum.php';
require 'Functions/Arrays/ArrayUdiff.php';
require 'Functions/Arrays/ArrayUdiffAssoc.php';
require 'Functions/Arrays/ArrayUdiffUassoc.php';
require 'Functions/Arrays/ArrayUintersect.php';
require 'Functions/Arrays/ArrayUintersectUassoc.php';
require 'Functions/Arrays/ArrayUnique.php';
require 'Functions/Arrays/ArrayUnshift.php';
require 'Functions/Arrays/ArrayValues.php';
require 'Functions/Arrays/ArrayWalk.php';
require 'Functions/Arrays/ArrayWalkRecursive.php';
require 'Functions/Arrays/Arsort.php';
require 'Functions/Arrays/Asort.php';
require 'Functions/Arrays/Count.php';
require 'Functions/Arrays/Current.php';
require 'Functions/Arrays/Each.php';
require 'Functions/Arrays/End.php';
require 'Functions/Arrays/InArray.php';
require 'Functions/Arrays/Key.php';
require 'Functions/Arrays/Krsort.php';
require 'Functions/Arrays/Ksort.php';
require 'Functions/Arrays/Natcasesort.php';
require 'Functions/Arrays/Natsort.php';
require 'Functions/Arrays/Next.php';
require 'Functions/Arrays/Pos.php';
require 'Functions/Arrays/Prev.php';
require 'Functions/Arrays/Range.php';
require 'Functions/Arrays/Reset.php';
require 'Functions/Arrays/Rsort.php';
require 'Functions/Arrays/Shuffle.php';
require 'Functions/Arrays/Sizeof.php';
require 'Functions/Arrays/Sort.php';
require 'Functions/Arrays/Uasort.php';
require 'Functions/Arrays/Uksort.php';
require 'Functions/Arrays/Usort.php';
require 'Functions/Bc/Bcadd.php';
require 'Functions/Bc/Bccomp.php';
require 'Functions/Bc/Bcdiv.php';
require 'Functions/Bc/Bcmul.php';
require 'Functions/Bc/Bcround.php';
require 'Functions/Bc/Bcscale.php';
require 'Functions/Bc/Bcsub.php';
require 'Functions/Ctype/CtypeAlpha.php';
require 'Functions/Ctype/CtypeCntrl.php';
require 'Functions/Ctype/CtypeDigit.php';
require 'Functions/Ctype/CtypeGraph.php';
require 'Functions/Ctype/CtypeLower.php';
require 'Functions/Ctype/CtypePrint.php';
require 'Functions/Ctype/CtypePunct.php';
require 'Functions/Ctype/CtypeXdigit.php';
require 'Functions/Datetime/Checkdate.php';
require 'Functions/Datetime/Date.php';
require 'Functions/Datetime/DateParse.php';
require 'Functions/Datetime/Getdate.php';
require 'Functions/Datetime/Gettimeofday.php';
require 'Functions/Datetime/Gmdate.php';
require 'Functions/Datetime/Gmmktime.php';
require 'Functions/Datetime/Gmstrftime.php';
require 'Functions/Datetime/Idate.php';
require 'Functions/Datetime/Microtime.php';
require 'Functions/Datetime/Mktime.php';
require 'Functions/Datetime/Strftime.php';
require 'Functions/Datetime/Strptime.php';
require 'Functions/Datetime/Strtotime.php';
require 'Functions/Datetime/Time.php';
require 'Functions/Exec/Escapeshellarg.php';
require 'Functions/Filesystem/Basename.php';
require 'Functions/Filesystem/Dirname.php';
require 'Functions/Filesystem/FileGetContents.php';
require 'Functions/Filesystem/Pathinfo.php';
require 'Functions/Filesystem/Realpath.php';
require 'Functions/Funchand/CallUserFunc.php';
require 'Functions/Funchand/CallUserFuncArray.php';
require 'Functions/Funchand/CreateFunction.php';
require 'Functions/Funchand/FunctionExists.php';
require 'Functions/Funchand/GetDefinedFunctions.php';
require 'Functions/I18n/I18nLocGetDefault.php';
require 'Functions/I18n/I18nLocSetDefault.php';
require 'Functions/Info/AssertOptions.php';
require 'Functions/Info/Getenv.php';
require 'Functions/Info/IniGet.php';
require 'Functions/Info/IniSet.php';
require 'Functions/Info/SetTimeLimit.php';
require 'Functions/Info/VersionCompare.php';
require 'Functions/Json/JsonDecode.php';
require 'Functions/Json/JsonEncode.php';
require 'Functions/Json/JsonLastError.php';
require 'Functions/Math/Abs.php';
require 'Functions/Math/Acos.php';
require 'Functions/Math/Acosh.php';
require 'Functions/Math/Asin.php';
require 'Functions/Math/Asinh.php';
require 'Functions/Math/Atan.php';
require 'Functions/Math/Atan2.php';
require 'Functions/Math/Atanh.php';
require 'Functions/Math/BaseConvert.php';
require 'Functions/Math/Bindec.php';
require 'Functions/Math/Ceil.php';
require 'Functions/Math/Cos.php';
require 'Functions/Math/Cosh.php';
require 'Functions/Math/Decbin.php';
require 'Functions/Math/Dechex.php';
require 'Functions/Math/Decoct.php';
require 'Functions/Math/Deg2rad.php';
require 'Functions/Math/Exp.php';
require 'Functions/Math/Expm1.php';
require 'Functions/Math/Floor.php';
require 'Functions/Math/Fmod.php';
require 'Functions/Math/Getrandmax.php';
require 'Functions/Math/Hexdec.php';
require 'Functions/Math/Hypot.php';
require 'Functions/Math/IsFinite.php';
require 'Functions/Math/IsInfinite.php';
require 'Functions/Math/IsNan.php';
require 'Functions/Math/LcgValue.php';
require 'Functions/Math/Log.php';
require 'Functions/Math/Log10.php';
require 'Functions/Math/Log1p.php';
require 'Functions/Math/Max.php';
require 'Functions/Math/Min.php';
require 'Functions/Math/MtGetrandmax.php';
require 'Functions/Math/MtRand.php';
require 'Functions/Math/Octdec.php';
require 'Functions/Math/Pi.php';
require 'Functions/Math/Pow.php';
require 'Functions/Math/Rad2deg.php';
require 'Functions/Math/Rand.php';
require 'Functions/Math/Round.php';
require 'Functions/Math/Sin.php';
require 'Functions/Math/Sinh.php';
require 'Functions/Math/Sqrt.php';
require 'Functions/Math/Tan.php';
require 'Functions/Math/Tanh.php';
require 'Functions/Misc/Pack.php';
require 'Functions/Misc/Uniqid.php';
require 'Functions/Netgopher/GopherParsedir.php';
require 'Functions/Network/InetNtop.php';
require 'Functions/Network/InetPton.php';
require 'Functions/Network/Ip2long.php';
require 'Functions/Network/Long2ip.php';
require 'Functions/Network/Setcookie.php';
require 'Functions/Network/Setrawcookie.php';
require 'Functions/Pcre/PregMatch.php';
require 'Functions/Pcre/PregQuote.php';
require 'Functions/Pcre/PregReplace.php';
require 'Functions/Pcre/SqlRegcase.php';
require 'Functions/Strings/Addcslashes.php';
require 'Functions/Strings/Addslashes.php';
require 'Functions/Strings/Bin2hex.php';
require 'Functions/Strings/Chop.php';
require 'Functions/Strings/Chr.php';
require 'Functions/Strings/ChunkSplit.php';
require 'Functions/Strings/ConvertCyrString.php';
require 'Functions/Strings/ConvertUuencode.php';
require 'Functions/Strings/CountChars.php';
require 'Functions/Strings/Crc32.php';
require 'Functions/Strings/Explode.php';
require 'Functions/Strings/GetHtmlTranslationTable.php';
require 'Functions/Strings/Hex2bin.php';
require 'Functions/Strings/HtmlEntityDecode.php';
require 'Functions/Strings/Htmlspecialchars.php';
require 'Functions/Strings/HtmlspecialcharsDecode.php';
require 'Functions/Strings/Implode.php';
require 'Functions/Strings/Join.php';
require 'Functions/Strings/Lcfirst.php';
require 'Functions/Strings/Levenshtein.php';
require 'Functions/Strings/Localeconv.php';
require 'Functions/Strings/Ltrim.php';
require 'Functions/Strings/Md5.php';
require 'Functions/Strings/Md5File.php';
require 'Functions/Strings/Metaphone.php';
require 'Functions/Strings/MoneyFormat.php';
require 'Functions/Strings/Nl2br.php';
require 'Functions/Strings/NlLanginfo.php';
require 'Functions/Strings/NumberFormat.php';
require 'Functions/Strings/Ord.php';
require 'Functions/Strings/ParseStr.php';
require 'Functions/Strings/Printf.php';
require 'Functions/Strings/QuotedPrintableDecode.php';
require 'Functions/Strings/QuotedPrintableEncode.php';
require 'Functions/Strings/Quotemeta.php';
require 'Functions/Strings/Rtrim.php';
require 'Functions/Strings/Setlocale.php';
require 'Functions/Strings/Sha1.php';
require 'Functions/Strings/Sha1File.php';
require 'Functions/Strings/SimilarText.php';
require 'Functions/Strings/Soundex.php';
require 'Functions/Strings/Split.php';
require 'Functions/Strings/Sprintf.php';
require 'Functions/Strings/Sscanf.php';
require 'Functions/Strings/StrGetcsv.php';
require 'Functions/Strings/StrIreplace.php';
require 'Functions/Strings/StrPad.php';
require 'Functions/Strings/StrRepeat.php';
require 'Functions/Strings/StrReplace.php';
require 'Functions/Strings/StrRot13.php';
require 'Functions/Strings/StrShuffle.php';
require 'Functions/Strings/StrWordCount.php';
require 'Functions/Strings/Strcasecmp.php';
require 'Functions/Strings/Strchr.php';
require 'Functions/Strings/Strcmp.php';
require 'Functions/Strings/Strcoll.php';
require 'Functions/Strings/Strcspn.php';
require 'Functions/Strings/StripTags.php';
require 'Functions/Strings/Stripos.php';
require 'Functions/Strings/Stripslashes.php';
require 'Functions/Strings/Stristr.php';
require 'Functions/Strings/Strlen.php';
require 'Functions/Strings/Strnatcasecmp.php';
require 'Functions/Strings/Strnatcmp.php';
require 'Functions/Strings/Strncasecmp.php';
require 'Functions/Strings/Strncmp.php';
require 'Functions/Strings/Strpbrk.php';
require 'Functions/Strings/Strpos.php';
require 'Functions/Strings/Strrchr.php';
require 'Functions/Strings/Strrev.php';
require 'Functions/Strings/Strripos.php';
require 'Functions/Strings/Strrpos.php';
require 'Functions/Strings/Strspn.php';
require 'Functions/Strings/Strstr.php';
require 'Functions/Strings/Strtok.php';
require 'Functions/Strings/Strtolower.php';
require 'Functions/Strings/Strtoupper.php';
require 'Functions/Strings/Strtr.php';
require 'Functions/Strings/Substr.php';
require 'Functions/Strings/SubstrCompare.php';
require 'Functions/Strings/SubstrCount.php';
require 'Functions/Strings/SubstrReplace.php';
require 'Functions/Strings/Trim.php';
require 'Functions/Strings/Ucfirst.php';
require 'Functions/Strings/Ucwords.php';
require 'Functions/Strings/Vprintf.php';
require 'Functions/Strings/Vsprintf.php';
require 'Functions/Strings/Wordwrap.php';
require 'Functions/Url/Base64Decode.php';
require 'Functions/Url/Base64Encode.php';
require 'Functions/Url/HttpBuildQuery.php';
require 'Functions/Url/ParseUrl.php';
require 'Functions/Url/Rawurldecode.php';
require 'Functions/Url/Rawurlencode.php';
require 'Functions/Url/Urldecode.php';
require 'Functions/Url/Urlencode.php';
require 'Functions/Vars/Boolval.php';
require 'Functions/Vars/Doubleval.php';
require 'Functions/Vars/EmptyPHP.php';
require 'Functions/Vars/Floatval.php';
require 'Functions/Vars/Gettype.php';
require 'Functions/Vars/Intval.php';
require 'Functions/Vars/IsArray.php';
require 'Functions/Vars/IsBinary.php';
require 'Functions/Vars/IsBool.php';
require 'Functions/Vars/IsBuffer.php';
require 'Functions/Vars/IsCallable.php';
require 'Functions/Vars/IsDouble.php';
require 'Functions/Vars/IsFloat.php';
require 'Functions/Vars/IsInt.php';
require 'Functions/Vars/IsInteger.php';
require 'Functions/Vars/IsLong.php';
require 'Functions/Vars/IsNull.php';
require 'Functions/Vars/IsNumeric.php';
require 'Functions/Vars/IsObject.php';
require 'Functions/Vars/IsReal.php';
require 'Functions/Vars/IsScalar.php';
require 'Functions/Vars/IsString.php';
require 'Functions/Vars/IsUnicode.php';
require 'Functions/Vars/IssetPHP.php';
require 'Functions/Vars/PrintR.php';
require 'Functions/Vars/Serialize.php';
require 'Functions/Vars/Strval.php';
require 'Functions/Vars/Unserialize.php';
require 'Functions/Vars/VarDump.php';
require 'Functions/Vars/VarExport.php';
require 'Functions/Xdiff/XdiffStringDiff.php';
require 'Functions/Xdiff/XdiffStringPatch.php';
require 'Functions/Xml/Utf8Decode.php';
require 'Functions/Xml/Utf8Encode.php';
