<?php
echo "=================================================================================\n🏦😨The Mystery Of the Midnight Mansion😨🏦\n=======================================================================\n\n";
echo "👥 Your Friend Circle\n\n";
echo "You are the main Character of this adventure." . PHP_EOL;
echo "You are with Your three closest Friends" . PHP_EOL;

//---->>>>>>>> Description of friend circle
echo "👤 Ayaan -> \t Brave banne ki kosish krta hai but actually thoda darpok hai.\n";
echo "👤 Mehak -> \t Group ki smartest member . Chhoti si Chooti detail bhi notice kr leti hai.\n";
echo "👤 Rohan -> \t Group ka comedian.Situation chahe kitni bhi serious ho, iska joke ready hota hai.\n";

echo "========================================================================================================/n/n";

//the stranger message come on their mobile phone
echo "🎬 Story begins⭐\n\n";
echo "It's a Friday evening , tum Mehek , Ayaan or Rohan normally hanghout krre ho ...Tabhi tumhare phone me ek unknown number se ek message aata h 💭" . PHP_EOL;
echo "tum message check krte ho or message me likha rhta h --->>> If u want to know the truth about what happen 20 years ago ...come to the blackwood Mansion before midnight😕😕.../n/n";
echo "tum sb message ko waps read krte ho...😕\nNo Name \nNo proper Phone Number \nbas ek location";
echo "Ayan says 🗣 : Bro... ya toh ye hamari life ka greatest adventure hone wala hai...\n\n";
echo "Mehak tumhara phone leti hai aur message ko carefully dekhti hai. or kehti h 🗣 `Guys... 😱 something is seriously weird.*Ye message jis number se aaya hai... woh number exist hi nahi karta.🤯🤯🤯*`";
echo "😨SILENCE APPEARS😨";

// user decides what to do 
echo "-*-*-*-* now u have to decide what to do next\n 1) go to Blackwood Mansion\n 2) ignore the message\n 3) call the Unknown Number\n\n";
$choice = readline("👍 >>> what will u do ? (enter the option number) : ");

//user choose to go the BlACKWOOD MENSION
if ($choice == 1) {
    echo "\nI think we should investigate the adventure...\n\nAyan says 🗣 **Finally! Adventure!**\nRohan says 🗣 Adventure tumhare liye hai. Mere liye toh insurance claim hai. Ruko me apne kabar k liye kafan ka taiyari kr k aata hu* 😂\n\n";
    echo "🔊 u all go for this Adventure to the BLACKWOOD MENSION\n\n";

    // user choose to ignore this message
} else if ($choice == 2) {
    echo "\ni think someone is pranking with us ...let's ignore this ...okay guyss its already late 🥱... kal milte h sham me isi trh baith k hangout krenge!\n\n";
    echo "🔊 Sab ghar chale jaate hain.Tum apne room mein ho.Time hota hai...### *11:11 PM ** a notification come TING!*-->Tumhare phone par ek aur message aata hai.\n";
    echo "***tumhe mera message ignore nhi karna chaiye th🙂*** and tumahare tote urr jaate h....your smile got disappear and suddenly the LIGHTS OFF💡\ntum Tum window ki taraf dekhte ho...Bahar ek *dark figure* khada hai...\nTum blink karte ho...and FIGURE GYABBBB😱😨*Figure gayab...😨😨*\n\n Tum immediately aone dosto ko call krte ho and u said ...guyss 😟 we have to go to the BLACKWOOD MANSION\n\n";


    //user decides to call to the number
} else {
    echo "\nokay wait...let me call in this number ....😕\nthe call ring ring ring and after a while the call get recieve and a sound comes **u are already too late** and the call Disconnect📞\nTumhare phone ki screen automatically change hoti hai.phone screen pe Ek location appear hoti hai 📍BLACKWOOD MANSION📍\n";
    echo "Rohan tumhari tarf dekhta h and says: 🗣 --> ab to jana prega \nAyaan 🗣--> okkay gyuss lets go! \nMehak 🗣--> Something is waiting for us there.\n\n";
    echo "🔊Tum teeno ke saath Blackwood Mansion ki taraf nikal padte ho.\n\n";
}

//==================== Story begins in mansion============================

echo "They reached to that mention address and there on seeing the horrified situation  they find 2 ways to explore the BLACKWOOD MANSION\n";
echo "🚪1) enter the MANSION\n";
echo "🚪2) return back\n\n";

$choice = readline("👍>>> what will u choose (1 or 2 ): ");

//chhose to enter the mansion
if ($choice == 1) {
    echo "\nlets enter to the MANSION... jaise hi wo enter krte h...💀 Mansion ka main gate automaic open hota h !\n";
    echo "Ayaan 🗣--> kyaaaa....bhai chal kya rha h kon itna ganda prank krra h hamare sath😨\n";
    echo "Rohan 🗣--> wahi to ...humne to kuch kiya bhi nhi h....apne aap hi gate open kaise ho gya😨\n";
    echo "A strange sound came from inside 💭 ***welcome back...finally u came...\n";
    echo "you said 🗣-->wait what ....welcome back....kya hum pehle bhi aaye h....";
    echo "Mehak 🗣--> bikul bhi nhi....kuch to Strange h ...akhir kya huwa th 20 yrs phele or hamara kya hi connection h in sb chiz se...\n\n";
    echo "🔊 u all enter the main gate🚪🚪\n\n";

    //conditions of entering the main gate
    echo "there u find 3 doors ...\n\n 🚪1) door to find the history\n🚪2)door to death\n\n";
    $choice = readline("What will U chhose: (1 or 2): ");

    //choose to find the history  behind it
    if ($choice == 1) {
        echo "\nokay ...we have decided to find the history behind it⌛\n";
        echo "sound appears 💭 *** So u have decides to find the History ...then reached to the library room there a clue is hidden🔍**** ⌛";
        echo "Rohan 🗣--> guyss...is this a library ...or Bhutiya mahal😬....kya bhayanakkkkk hai yaar😨\n\n";
        echo "Laughing sound appears😆😆😆 ***lakin aap sb is BLACKWWOD MANSION me h ...jaha main 20 saal pehle mar chuka h...😆";
        echo "Everyone get Terrified and shock and get freeze😬😫😳\n\n";

        //inside the libraray option appears
        echo "🔊 you have reached there ...and there u find  \n🗝️1)key of a cupboard 🚪2) A mysterious hidden door\n\n";

        $choice = readline("what u want to go with 🤔(1 or 2):  ");

        //cupboard key
        if ($choice == 1) {
            echo "\nguyss...lets go with the key🤔....pata nhi agr hum door ko choose krenge to fir se is bhutiya mahal me kya kya hoga hamare sath😬\n\n";
            echo "Everyone 🗣--> haa sahi h..ham sb ko bhi yahi lgta hai😕\n ";
            echo "okk...hum sb cupboard ka key lete h ...kya hota h dekhte h😕\n";
            echo "when u open the door ... ☠️ ek Skeleton cupboard se niche girta h 😨\n\n";
            echo "kyaaaaaa h ..........kiskaaaa h 😨\n\n";
            echo "🔊 This is me ....\nEveryone Shocks";
            echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
            echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
            echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️\n";
            echo "and mai tarap tarap kr ...kai dino tak dar kr sehem kr ...akela bhutiya jagh se bahar nikalne ka kosish krta rha or wait krta rha ki mere dost aayenge waps...\n";
            echo "par wo nhi aaye and at the end mai akele nhi niakl saka in BLACKWOOD MANSION se or akahir me mar gya ⚰️\n\n";
            echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
            echo "THEY HELP the ghost and GHOST DISAPPEAR FROM THERE LIFE😊\n\n";

            //when they choose to open the mysterious door
        } else {
            echo "\nokay lets open the door🚪...kya pata bahar nikal jaye is bhutiya mahal se🏰\n\n";
            echo "🚪When u open the mysterious door ... u all enterd to a room...jaha wall par kuch photo frames th🖼️.....usme tum sb k parents ka image th👥👥\n";
            echo "par image me ek or insaan th...jo apke parents nhi th....🤔";
            echo "Ayaan 🗣--> ek sec...sb ko hum pechan rahe h is image me...but who is this...i have never saw him🤔🤔\n\n";
            echo "🔊 This is me ....\nEveryone Shocks";
            echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
            echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
            echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️\n";
            echo "and mai tarap tarap kr ...kai dino tak dar kr sehem kr ...akela bhutiya jagh se bahar nikalne ka kosish krta rha or wait krta rha ki mere dost aayenge waps...\n";
            echo "par wo nhi aaye and at the end mai akele nhi niakl saka in BLACKWOOD MANSION se or akahir me mar gya ⚰️\n\n";
            echo "\nMehak 🗣-->...par aap h kon...or hamne kya kra h aapke sath...what u want from us ?🤔\n\n";
            echo "main bas chahata th ki aap apne parents se baat krte...\n";
            echo "or unsb ko batate ki hum aapke parents ko akela chor kr nhi bhagaa th waha se....main waha trap ho chuka th\n";
            echo "aaj tk un sb ko yahi lgta h ki main un sb ko trouble me akela chor diya th...\n";
            echo "just to save my own life and risk them all\n\n";
            echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
            echo "THEY HELP the ghost and GHOST DISAPPEAR FROM THERE LIFE😊\n\n";
        }

        // door to death
    } else {
        echo "\nDon't u think this is tooo terrified and dangerous!\n";
        echo "Mehak 🗣--> hai to ...par tum kahi yh to nhi soch rhe ho ki hame door to death choose krna chaiye without knowing the history😨\n";
        echo "Ayaan 🗣-->😨bhai please mazak mat krr ..hadd hoti h aise time me mazak krne ka 😵‍💫\n";
        echo "you 🗣--> jii bilkul...tarap tarap kr marne se achha h ki ek hi baar me mar jau....waise bhi muzhe abhi to situation ko dekh kr maut aa rhi h  😵‍💫\n\n";

        echo "okk we choose door to death🪦 ...\n and they enter the door🚪!!\n\n";
        echo "🔊 sound of ghost appear ***alright...u have enter the death door...marne ki jaldi h tum sb ko...to usi trh se maroge jaise main mara th 20 saal phele😄😄\n";
        echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
        echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
        echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️";
        echo "and me tarap tarap kr ...kai dino tak dar se sehem kr ..akela larta rha...and at the end wo sb bhi nhi aaye and me bhi mar gya ⚰️";
        echo "😱😮 everyone freeze....because they are talking to ghost ....\n\n";

        //option appears when they chhose door to death
        echo "1)should they communicate with the ghost☠️🔪\n2)or choose to die direct 🪦⚰️\n\n";

        $choice = readline("what you and your team decides: (1 or 2)");
        if ($choice == 1) {
            echo "\nMehak 🗣-->...par aap h kon...or hamne kya kra h aapke sath...what u want from us ?🤔\n\n";
            echo "main bas chahata th ki aap apne parents se baat krte...\n";
            echo "or unsb ko batate ki hum aapke parents ko akela chor kr nhi bhagaa th waha se....main waha trap ho chuka th\n";
            echo "aaj tk un sb ko yahi lgta h ki main un sb ko trouble me akela chor diya th...\n";
            echo "just to save my own life and risk them all\n\n";
        } else {
            echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
            echo "THEY CANT'T HELP the ghost🥺😔";
        }
    }

//they ran away without entering the main gate  
} else {
    echo "\nu have decided to go back to your home🏠 and u are not exploring this MANSION ....\n";
    echo "tum sb car me ho ....achanakkkk se car ko stop krte ho ...aap dekhte ho ki road me koi khada h ...or aapka help maang rha h.... \n";
    echo "aap sb puchte ho...kya help chaiye ....kya kr skte h hum aapke liye...\n\n";
    echo "the man said 🗣--> please aap mere sath BLACKWOOD MANSION me chal lo ... aap Muzhe waha akele chor kr u aa gye...\n";
    echo "Maine aapko kaha th n ki aap aaj raat aana h ...to know the history😊😊 \n";
    echo "Mehak 🗣--> what the Hell is this....yaarrrrrrr😬 Dont open the gate....and leave this...let stay away from this😬\n\n";

    //option came when u ran away from the mansion
    echo "now u have 2 option \n\n1)🏃ignore and run away from the situation \n2)go back to the MANSION\n\n";
    $choice = readline("what will u chooce out of these option (1 or 2) : ");

    //aap MANSION k ander jaye bina bahar chale jaate and and bhoot se baat kr aap dar kr k apne apne ghr jaate ho
    if ($choice == 1) {
        echo "\nyou 🗣--> i think it's to Risky ....I don't think we sholud involve in this dangerous Situation \n";
        echo "🔊 u are returning back from the Stranger....U are on the way to your home and...........\n";
        echo "your brakes failed 🚗 the car is out of controlled and your car got CRASHED....tum sb bhaoutt buri trh injured🧰 ho ...\n ";
        echo "tum sb aise situation me ho ...ya to tumhe hospital ki jarurat h ya to tum mar jaoge🚨\n";
        echo "Rohan 🗣--> guyss ..look there ..that Strange man...👴🏻\n";
        echo "the 👴🏻man suddenly appears and said 💭  ****tum sb k papa ne bhi muzhe uss MANSION me akele chor diya th 20 saal phele\n";
        echo "and same history is repeating again....tum sb bhi wahi krre ho....😊😊\n";
        echo "but but but....this time u all have to die....Because i want ki tum sb k parents closest one se dur hone ka dard samjhe🥺jis trh maine apni family se dur rhkr samjha....❤️‍🩹\n\n";
        echo "🔊they all died...and the GHOST also Disappear.....😔 \n\n";
        echo "everyone in the group just came to know that their parents and the ghost where friends....and in this Mansion they leave them alone and left the Mnsion\n
        but the history is incomplete .....they died without knowing the actual story behind that🥺\n\n";
        echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";

        //after listing the old mamn...(the ghost), u all decided to go back to the mansion
    } else {
        echo "\nyou 🗣--> i think it's to Risky ....but if we don't listen the old man ghost ...we all die...\n";
        echo "Mehak 🗣--> or marne se achha h...MANSION chalte h...or pata krte h hum sb kis trh se link h 20 yrs back wali history se 💭\n";
        echo "Ayaan 🗣--> yes...ofcourse...chalte h ...par literally sahi bolu to uss jagh me waps jaane se easy marna lg rha h humko!😭\n";
        echo "Rohan 🗣--> bhai marna to hai hi...chalo kuch Adventure kr k mar lete h ...atleast marne k baad kuch to achha feel hoga ki kuch adventure kiye h life me 😆😭\n\n";

        //conditions of entering the main gate
        echo "there u find 3 doors ...\n\n 🚪1) door to find the history\n🚪2)door to death\n\n";
        $choice = readline("What will U chhose: (1 or 2): ");

        //go with the knowing history
        if ($choice == 1) {
            echo "\nokay ...we have decided to find the history behind it⌛\n";
            echo "sound appears 💭 *** So u have decides to find the History ...then reached to the library room there a clue is hidden🔍**** ⌛";
            echo "Rohan 🗣--> guyss...is this a library ...or Bhutiya mahal😬....kya bhayanakkkkk hai yaar😨\n\n";
            echo "Laughing sound appears😆😆😆 ***lakin aap sb is BLACKWWOD MANSION me h ...jaha main 20 saal pehle mar chuka h...😆";
            echo "Everyone get Terrified and shock and get freeze😬😫😳\n\n";
            //inside the libraray
            echo "🔊 you have reached there ...and there u find  \n🗝️1)key of a cupboard 🚪2) A mysterious hidden door\n\n";

            $choice = readline("what u want to go with 🤔(1 or 2):  ");
            if ($choice == 1) {
                echo "\nguyss...lets go with the key🤔....pata nhi agr hum door ko choose krenge to fir se is bhutiya mahal me kya kya hoga hamare sath😬\n\n";
                echo "Everyone 🗣--> haa sahi h..ham sb ko bhi yahi lgta hai😕\n ";
                echo "okk...hum sb cupboard ka key lete h ...kya hota h dekhte h😕\n";
                echo "when u open the door ... ☠️ ek Skeleton cupboard se niche girta h 😨\n\n";
                echo "kyaaaaaa h ..........kiskaaaa h 😨\n\n";
                echo "🔊 This is me ....\nEveryone Shocks";
                echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
                echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
                echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️\n";
                echo "and mai tarap tarap kr ...kai dino tak dar kr sehem kr ...akela bhutiya jagh se bahar nikalne ka kosish krta rha or wait krta rha ki mere dost aayenge waps...\n";
                echo "par wo nhi aaye and at the end mai akele nhi niakl saka in BLACKWOOD MANSION se or akahir me mar gya ⚰️\n\n";
                echo "\nMehak 🗣-->...par aap h kon...or hamne kya kra h aapke sath...what u want from us ?🤔\n\n";
                echo "main bas chahata th ki aap apne parents se baat krte...\n";
                echo "or unsb ko batate ki hum aapke parents ko akela chor kr nhi bhagaa th waha se....main waha trap ho chuka th\n";
                echo "aaj tk un sb ko yahi lgta h ki main un sb ko trouble me akela chor diya th...\n";
                echo "just to save my own life and risk them all\n\n";
                echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
                echo "THEY HELP the ghost and GHOST DISAPPEAR FROM THERE LIFE😊\n\n";

                //when they choose to open the mysterious door
            } else {
                echo "\nokay lets open the door🚪...kya pata bahar nikal jaye is bhutiya mahal se🏰\n\n";
                echo "🚪When u open the mysterious door ... u all enterd to a room...jaha wall par kuch photo frames th🖼️.....usme tum sb k parents ka image th👥👥\n";
                echo "par image me ek or insaan th...jo apke parents nhi th....🤔";
                echo "Ayaan 🗣--> ek sec...sb ko hum pechan rahe h is image me...but who is this...i have never saw him🤔🤔\n\n";
                echo "🔊 This is me ....\nEveryone Shocks";
                echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
                echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
                echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️\n";
                echo "and mai tarap tarap kr ...kai dino tak dar kr sehem kr ...akela bhutiya jagh se bahar nikalne ka kosish krta rha or wait krta rha ki mere dost aayenge waps...\n";
                echo "par wo nhi aaye and at the end mai akele nhi niakl saka in BLACKWOOD MANSION se or akahir me mar gya ⚰️\n\n";
                echo "\nMehak 🗣-->...par aap h kon...or hamne kya kra h aapke sath...what u want from us ?🤔\n\n";
                echo "main bas chahata th ki aap apne parents se baat krte...\n";
                echo "or unsb ko batate ki hum aapke parents ko akela chor kr nhi bhagaa th waha se....main waha trap ho chuka th\n";
                echo "aaj tk un sb ko yahi lgta h ki main un sb ko trouble me akela chor diya th...\n";
                echo "just to save my own life and risk them all\n\n";
                echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
                echo "THEY HELP the ghost and GHOST DISAPPEAR FROM THERE LIFE😊\n\n";
            }

            //they chhose door to death
        } else {
            echo "\nDon't u think this is tooo terrified and dangerous!\n";
            echo "Mehak 🗣--> hai to ...par tum kahi yh to nhi soch rhe ho ki hame door to death choose krna chaiye without knowing the history😨\n";
            echo "Ayaan 🗣-->😨bhai please mazak mat krr ..hadd hoti h aise time me mazak krne ka 😵‍💫\n";
            echo "you 🗣--> jii bilkul...tarap tarap kr marne se achha h ki ek hi baar me mar jau....waise bhi muzhe abhi to situation ko dekh kr maut aa rhi h  😵‍💫\n\n";

            echo "okk we choose door to death🪦 ...\n and they enter the door🚪!!\n\n";
            echo "🔊 sound of ghost appear ***alright...u have enter the death door...marne ki jaldi h tum sb ko...to usi trh se maroge jaise main mara th 20 saal phele😄😄\n";
            echo "20 saal phele main apne dosto k sath aaya th yaha enjoy krne....wo sb jante th ki muzhe akele andhsre se kitna dar lgta h still they pranked me...they create fake horror scaniario๋࣭ ⭑🕸🦇🕸๋࣭ ⭑\n";
            echo "iss jagh me bhut h💀...main un sb ko kehta rha ki maano mera baat chalte h yaha se wapas...kuch sahi nhi h yaha...💀😵‍💫\n";
            echo "par unhe lgta rha ki main prank k wjh se dar rha hu....but when they came to know the reality they left me alone and escape out of this ghost Mansion🕯️🕯️";
            echo "and me tarap tarap kr ...kai dino tak dar se sehem kr ..akela larta rha...and at the end wo sb bhi nhi aaye and me bhi mar gya ⚰️";
            echo "😱😮 everyone freeze....because they are talking to ghost ....\n\n";

            echo "1)should they communicate with the ghost☠️🔪\n2)or choose to die direct 🪦⚰️\n\n";

            $choice = readline("what you and your team decides: (1 or 2)");

            if ($choice == 1) {
                echo "\nMehak 🗣-->...par aap h kon...or hamne kya kra h aapke sath...what u want from us ?🤔\n\n";
                echo "main bas chahata th ki aap apne parents se baat krte...\n";
                echo "or unsb ko batate ki hum aapke parents ko akela chor kr nhi bhagaa th waha se....main waha trap ho chuka th\n";
                echo "aaj tk un sb ko yahi lgta h ki main un sb ko trouble me akela chor diya th...\n";
                echo "just to save my own life and risk them all\n\n";

                echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
                echo "THEY CANT'T HELP the ghost🥺😔";
            } else {
                echo "🏦😨*******THE STORY END ....WITHOUT KNOWING THE HISTORY*******🥺😔";
                echo "THEY CANT'T HELP the ghost🥺😔";
            }
        }
    }
}
