#!/bin/bash

set -x

cd ${FIGOUT}


if [ $RUN = 'rurtma2p5' ]; then
  RUN=rtma2p5_ru
fi

RZDMPATH=${RZDMMAIN}/${RUN}/${HOUR}${MINUTE}

ssh -l ${webuid} ${web_server} "mkdir -p ${RZDMPATH}"
err1=$?


thisrun=`echo $RUN | awk '{print toupper($0)}'`

latestfig=./${HOUR}${MINUTE}/t2m_CONUS_${thisrun}_ANL.gif

rm index.html

RTMA=${WEBMAIN}/RTMA
URMA=${WEBMAIN}/URMA
export MYURMA_DIFFS=${MYURMA_DIFFS:-""}
if [ -z $MYURMA_DIFFS ]; then
  MYURMA_DIFFS_HTML=""
else
  MYURMA_DIFFS_HTML="<li id=leftvert><a id=leftvert href=\"${MYURMA_DIFFS}\">URMA Diffs</a></li>"
fi


TIME_SERIES=${WEBMAIN}_ts/urma/rtma.html
RTMARU=${WEBMAIN}/rtma2p5_ru


export PRECIP_URMA_URL=${PRECIP_URMA:-""}

if [ -z $PRECIP_URMA_URL ]; then
  PRECIP_URMA_HTML=""
else
  PRECIP_URMA_HTML="<li id=leftvert><a id=leftvert href=\"${PRECIP_URMA_URL}\">RTMA/URMA QPE\</a></li>"
fi

cat ${projdir}/timeloop_page/index_${RUN}.html \
    | sed s,_RTMA_,${RTMA},g | sed s,_URMA_,${URMA},g \
    | sed s,_TIME_SERIES_,${TIME_SERIES},g \
    | sed s,_RTMARU_,${RTMARU},g \
    | sed s,_HRIN_,${HOUR},g | sed s,_MNIN_,${MINUTE},g \
    | sed s,_LATESTFIG_,${latestfig},g > index.html


# Absolutely, positively MUST use double quotes surrounding the variable expansion below otherwise
# the shell will treat the value of $PRECIP_URMA_HTML as a series of whitespace-separated series of glob patterns
# thus screwing up sed, causing it to throw weird errors

sed -i s,__PRECIP-URMA__,"$PRECIP_URMA_HTML",g index.html
sed -i s,__URMADIFFS__,"$MYURMA_DIFFS_HTML",g index.html

rsync -avz ${FIGOUT}/index.html ${projdir}/timeloop_page/js \
           ${projdir}/timeloop_page/*css ${webuid}@${web_server}:${RZDMMAIN}/${RUN}/

rsync -avz ${FIGOUT}/*gif ${webuid}@${web_server}:${RZDMPATH}/
err2=$?

(( err = err1 + err2 ))

#if [ -d ${FIGOUT} ]; then
#  rm -rf ${FIGOUT}
#fi

exit $err 


