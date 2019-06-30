[<?php

use App\Models\Bank;
use Illuminate\Database\Seeder;
use App\User;
use App\Models\Vestbank;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$users = collect(
    [
    'chukscgc@yahoo.com',
    'amen@yahoo.com',
    'chykedee@gmail.com',
    'jimkeneths@gmail.com',
    'ogundipetolulope@gmail.com',
    'boviic001@gmail.com',
    'oscaremmanuella@gmail.com',
    'enatoomonefe@gmail.com',
    'ziggywise.gz@gmail.com',
    'caleb.alimi@gmail.com',
    'suberuadebukola@gmail.com',
    'blossomuri@gmail.com',
    'dogunlusi@ymail.com',
    'f.adeyelu@gmail.com',
    'itselela@gmail.com',
    'babatundearamide@yahoo.com',
    'motuns02cat@yahoo.com',
    'fadeke_badejo@yahoo.com',
    'kaseinadashe@gmail.com',
    'obajiotareh@yahoo.com',
    'bolaodeshilo@yahoo.com',
    'omobimbola22@gmail.com',
    'harlekzy@gmail.com',
    'mail2sunkanmi@gmail.com',
    'wilsonobiorah@gmail.com',
    'rahamat.umoru@gmail.com',
    'adanjideka@gmail.com',
    'duncandavid1949@gmail.com',
    'nwagbogu@outlook.com',
    'idyphilip@gmail.com',
    'nwakalormichael@gmail.com',
    'jimadeolapade@yahoo.com',
    'karierenoluwatoyin@yahoo.com',
    'precious@chukundah.com',
    'abegundelola@yahoo.com',
    'edirin.verere@yahoo.com',
    'mrasaoluayodeji@gmail.com',
    'chukwumerijeugochinyere@gmail.com',
    'okafor110@gmail.com',
    'omoniyi.adetola@gmail.com',
    'amarachukwuobi@gmail.com',
    'didi_umeh@yahoo.com',
    'mailtoyebi@yahoo.com',
    'ibuchim.chiegene@gmail.com',
    'ikhideasuelimen@gmail.com',
    'michael.anukwu@yahoo.com',
    'cmokpala@gmail.com',
    'anjola.babatunde@yahoo.com',
    'abiolaawolokun@yahoo.com',
    'test@gmail.com',
    'oyakhilomeikhuoriah@gmail.com',
    'agapeviktor@gmail.com',
    'solajobi@gmail.com',
    'gettudy04@gmail.com',
    'yomiadams007@yahoo.com',
    'ugochi_akwiwu@yahoo.com',
    'babestell@yahoo.com',
    'ogali.nnamdi@gmail.com',
    'bunmi03@yahoo.co.uk',
    'bunmi.ogunlusi@gmail.com',
    'dannon_daniel@yahoo.com',
    'akpachike@gmail.com',
    'adeotiyinkajosh@gmail.com',
    'yinka_17@yahoo.com',
    'udo.chi29@gmail.com',
    'livingstonegwatau@gmail.com',
    'ifeoma.uddoh@gmail.com',
    'elvisojugo@gmail.com',
    'kayodeadesope@gmail.com',
    'gifted4laff@gmail.com',
    'alukodami@ymail.com',
    'abdmaliqq@gmail.com',
    'kaylor777@gmail.com',
    'ulinfun@yahoo.com',
    'yemboy2k3@yahoo.com',
    'hpoloma86@yahoo.com',
    'soul2sonie@yahoo.com',
    'paul.hollwedel@gmail.com',
    'folasadekanye@gmail.com',
    'idosamed@gmail.com',
    'veronicapanaigube@yahoo.com',
    'tokx4u@gmail.com',
    'funmi.abdulrahman@gmail.com',
    'pristincapital@gmail.com',
    'bolanleodetokun@gmail.com',
    'cohikere@yahoo.com',
    'omodara.adediran@gmail.com',
    'okechukwuinnocent9@gmail.com',
    'lawsonibiso1@gmail.com',
    'temiakinniyi@gmail.com',
    'obie.mdk@gmail.com',
    'ifeanyiokafor95@yahoo.com',
    'olibiechioma@yahoo.com',
    'asquare9@yahoo.co.uk',
    'Laolu4mi2002@yahoo.com',
    'osindeindemmanuel1920@gmail.com',
    'utibeobong@gmail.com',
    'damseluju@yahoo.com',
    'preciousmaduoma@gmail.com',
    'lawalrafiuaj@gmail.com',
    'ogheneminedjebah@gmail.com',
    'dfumbibusayo@yahoo.com',
    'dannithomx@gmail.com',
    'ayo_enilolobo@yahoo.com',
    'ephyades@gmail.com',
    'saheedomustafa@gmail.com',
    'talktomrsmoe@gmail.com',
    'tobiugoh@yahoo.com',
    'kayc20@gmai.com',
    'Hamza@AbrahamIbrahim.com',
    'revfamnd@gmail.com',
    'pelumib@yahoo.com',
    'lordkundafrk@gmail.com',
    'olamiposiademuyiwa@gmail.com',
    'abibanzo@gmail.com',
    'f.adeyelu@yahoo.com',
    'uniqueseyi2007@yahoo.co.uk',
    'Nathan_alexander71@hotmail.com',
    'damie_miller@yahoo.com',
    'nnasco90@yahoo.com',
    'ohis1234@gmail.com',
    'abijo.kikelomo@yahoo.com',
    'owoyembukky@gmail.com',
    'olarwahley@gmail.com',
    'osuohafrank@gmail.com',
    'medonjemine@gmail.com',
    'itisfavour@gmail.com',
    'beauty.golomo@yahoo.com',
    'iogunyemi79@gmail.com',
    'dodeh63@gmail.com',
    'KatherinePreston65@jennie.club',
    'fheyee28@gmail.com',
    'laidebada20@gmail.com',
    'Dekwinle@yahoo.com',
    'Yakubuisa396@gmail.com',
    'ukwuezerichard@gmail.com',
    'opeyemiokehinde@gmail.com',
    'meetoladele@gmail.com',
    'wisdomoche95@gmail.com',
    'ngozi.asogwa18@gmail.com',
    'dammy234@yahoo.co.uk',
    'heipheoluwa@yahoo.com',
    'toyinomiks@yahoo.com',
    'obafemiayeni1@gmail.com',
    'temioshin1@gmail.com',
    'emova2012@gmail.com',
    'owenkere@yahoo.com',
    'confidopaul@gmail.com',
    'dml_enitan@yahoo.com',
    'mistuhsodi@gmail.com',
    'bakre.oluwafemi@gmail.com',
    'olajidebadmus43@yahoo.com',
    'monyeruth@gmail.com',
    'irobofaith@yahoo.com',
    'cenwo@yahoo.com',
    'calmpress@gmail.com',
    'refejohn@gmail.com',
    'phydelcraft@gmail.com',
    'zihainara@gmail.com',
    'o.o.fadahunsi@gmail.com',
    'augustinenmerole@yahoo.com',
    'tosinolasehinde26@yahoo.com',
    'drandyscorner@yahoo.com',
    'y.investsfund@gmail.com',
    'toluelekula@yahoo.com',
    'bolarinwaoyekunle@gmail.com',
    'wumioyediran@gmail.com',
    'yemisisinikeoyediran@gmail.com',
    'eberenkoro@hotmail.com',
    'modolaniadene@gmail.com',
    'franksactrccg@gmail.com',
    'ezikehc@gmail.com',
    'tinufc@gmail.com',
    'malikoluwatobi@gmail.com',
    'laramofikoya@gmail.com',
    'kofogiwa@gmail.com',
    'solodeoku@gmail.com',
    'valerieakuchie@gmail.com',
    'eizuagba@yahoo.com',
    'omotoyegb@gmail.com',
    'bangura_jemilatu@yahoo.com',
    'lawsontolu1@gmail.com',
    'seyioladapo22@yahoo.com',
    'jemmyusoroh@gmail.com',
    'ifychuckdee@gmail.com',
    'vinzmbonu@gmail.com',
    'tobiolasoji@yahoo.com',
    'solaboade@yahoo.com',
    'itunu.mercy98@gmail.com',
    'aligbe.eromosele@gmail.com',
    'wunmimajek2006@yahoo.com',
    'washimatuleun@gmail.com',
    'abj2181@yahoo.co.uk',
    'kameel.alebiosu@gmail.com',
    'teasaah@gmail.com',
    'collinsobidiagha@gmail.com',
    'oluwanifemibabade@gmail.com',
    'funmi.ooa@gmail.com',
    'adk2911@gmail.com',
    'joy.usifo@gmail.com',
    'ocholisamuel@yahoo.co.uk',
    'paroski4u@gmail.com',
    'yemi4knightmoon@gmail.com',
    'oyediranbusola@yahoo.com',
    'ejianyaprisca@gmail.com',
    'anitanwajei@gmail.com',
    'DSORIKE@GMAIL.COM',
    'keamc0090@gmail.com',
    'ifadajessica@gmail.com',
    'abbygbadegesin@gmail.com',
    'davisuyanne2002@yahoo.co.uk',
    'agholorangelai@gmail.com',
    'adedejiiretomiwa@gmail.com',
    'bbanigbe@gmail.com',
    'fumbie40@gmail.com',
    'seyejoseph@gmail.com',
    'fbidowu@student.lautech.edu.ng',
    'demola.adelekan@gmail.com',
    'otsedanesi@gmail.com',
    'bob.ononuju@gmail.com',
    'tomiwa.ijaware@gmail.com',
    'rosyluvsu4real@yahoo.com',
    'oghoghohappiness14@gmail.com',
    'koladeolugbeje@gmail.com',
    'tosin723@gmail.com',
    'bunmi.eajayi@gmail.com',
    'koyejoseunfunmi@gmail.com',
    'wuraoladebbie@gmail.com',
    'omooba05@gmail.com',
    'funkenw@hotmail.com',
    'adeyemaj@gmail.com',
    'aanuadeniyi@gmail.com',
    'tobilobafabanwo@gmail.com',
    'hi@feliximafidon.com',
    'ifeoluwaadegoke@gmail.com',
    'tobilop2005@yahoo.com',
    'adeline.ashiedu@gmail.com',
    'adeyemisit@gmail.com',
    'winifred88uk@yahoo.co.uk',
    'sehimiaghe@gmail.com',
    'oraywatt@yahoo.co.uk',
    'prattomowunmi@gmail.com',
    'precious_titilayo@yahoo.com',
    'jhessikhar567@gmail.com',
    'oluwaseun099@gmail.com',
    'soshinysilva@gmail.com',
    'pamokpala@gmail.com',
    'ododoashaka@gmail.com',
    'pacedesignbox@gmail.com',
    'akitoyebalogun@gmail.com',
    'chiomaachugonye@gmail.com',
    'd.ugbaja@yahoo.com',
    'ayo.akindele1@gmail.com',
    'mabodamisa@gmail.com',
    'rehua.omodu@gmail.com',
    'emiegab@gmail.com',
    'pokungbowa@becomexcellence.net',
    'nicahben@gmail.com',
    'MAkinbiyi@gmail.com',
    'johnsonsandra1996@gmail.com',
    'ejiro_ogbodu2000@yahoo.com',
    'effiongedentekhe@gmail.com',
    'candideduoh@gmail.com',
    'adebayolola@yahoo.com',
    'udoh_ub@yahoo.com',
    'kennybiola@gmail.com',
    'ifeoluwa.adegbile@yahoo.com',
    'enoquin24@gmail.com',
    'kerikuma.oshilim@yahoo.com',
    'cutetitimak@gmail.com',
    'umeadionyekwelu@gmail.com',
    'oyewobi999@yahoo.com',
    'babatundeabikefavour@gmail.com',
    'adebiyiteslimat@gmail.com',
    'eomisakin@yahoo.com',
    'lawlar4real@yahoo.co.uk',
    'eumeasalugo@yahoo.com',
    'sammie4good@gmail.com',
    'noroabamba@yahoo.com',
    'obuzorgee@yahoo.com',
    'chukseziashi@gmail.com',
    'shaunacindy@melcow.com',
    'sunnyben03@yahoo.com',
    'edithdario@amysink.com',
    'u.ntofon@gmail.com',
    'agnaibi@hotmail.com',
    'makhmatw9iil@mail.ru',
    'yemienigbokan@yahoo.com',
    'fakunle19@gmail.com',
    'busayoojewale@gmail.com',
    'ona.olumide@gmail.com',
    'somioguah@gmail.com',
    'chinonso.njionye@gmail.com',
    'kay2kay95@gmail.com',
    'fadfad4ril@yahoo.com',
    'osakaadaora007@gmail.com',
    'peebboo@yahoo.com',
    'zinu06@gmail.com',
    'julianalabake09@gmail.com',
    'afoo.ajao@gmail.com',
    'a_graycie@yahoo.com',
    'ayobamib@yahoo.com',
    'ibeh.brightc@yahoo.com',
    'eakpan597@gmail.com',
    'abimmza@gmail.com',
    'hajaratopeyemi@gmail.com',
    'omenogor.oshilim@elizadeuniversity.edu.ng',
    'imamzmailz@yahoo.com',
    'angelogb30@yahoo.com',
    'joynwagu2@yahoo.com',
    'chymolokwu@gmail.com',
    'ekymakara@yahoo.com',
    'topopoola@yahoo.co.uk',
    'tonymonerian@yahoo.co.uk',
    'gopitoke@yahoo.com',
    'bizkonsults@gmail.com',
    'olabodel@yahoo.com',
    'ty705@yahoo.com',
    'ysotimehin@yahoo.com',
    'efunlolahughes@gmail.com',
    'adeyeye079@gmail.com',
    'ginika.maduagwu@gmail.com',
    'zezeolotu@yahoo.com',
    'olotugladys@yahoo.com',
    'tolex005@gmail.com',
    'twady77@gmail.com',
    'Hilaryiloka4@gmail.com',
    'Kingtosino@yahoo.com',
    'ikechigazuanita@gmail.com',
    'bilqeesuyunusa@gmail.com',
    'omobolanles.adeniran@gmail.com',
    'bukfadudu@yahoo.com',
    'akamerecynthia@gmail.com',
    'nautictim@hotmail.com',
    'egberike26@gmail.com',
    'attaritoyin@gmail.com',
    'oshoefi@gmail.com',
    'olasumboadeoye@gmail.com',
    'edidiongoko1@gmail.com',
    'ofonetuk@gmail.com',
    'aaogunlusi@yahoo.com',
    'tobyuzo@gmail.com',
    'civilatu@yahoo.com',
    'ladymoremi@gmail.com',
    'ifmooy@gmail.com',
    'olubukolaawosanya@gmail.com',
    'ilozumbaalex@yahoo.com',
    'adeayorenner@gmail.com',
    'midebabatunde@gmail.com',
    'mrfaniyi@gmail.com',
    'joycegabriels32@gmail.com',
    'adebowalebanjo@gmail.com',
    'serahblossom@gmail.com',
    'samueluduma2@gmail.com',
    'futuretechfurniturecompany@gmail.com',
    'paddedchristopher@yahoo.com',
    'yemibolaji14@yahoo.com',
    'julietchinelougo@gmail.com',
    'abijo.kikelomo@gmail.com',
    'opeyemi.gaji@gmail.com',
    'crowchay@gmail.com',
    'danielwillies212@gmail.com',
    'akin.oyekunle@yahoo.com',
    'ayolax2003@gmail.com',
    'gbolaaladedunye@gmail.com',
    'olayanjuolakunle@gmail.com',
    'shinorking@gmail.com',
    'femi.d.odukoya@gmail.com',
    'jswart_ng@yahoo.com',
    'banksmoshood@yahoo.com',
    'dapo_fala@yahoo.com',
    'adekoyababs60@gmail.com',
    'rukayyat_abdulrahman@outlook.com',
    'ebabatundearo@gmail.com',
    'chiomaud@gmail.com',
    'precious.u@hotmail.com',
    'phelarin@gmail.com',
    'lekoshiman@gmail.com',
    'frankuchegbu@gmail.com',
    'lilsimrules@yahoo.com',
    'lawalsquare013@gmail.com',
    'dianaambrose57@gmail.com',
    'damilola.eluyela@gmail.com',
    'okererachel@gmail.com',
    'chinenye.okechukwu@yahoo.com',
    'oluwamayowaadeyemi@gmail.com',
    'gougstar@gmail.com',
    'nosatundeoni@yahoo.co.uk',
    'estherkalu19@gmail.com',
    'ocean.og96@gmail.com',
    'denixkurz@gmail.com',
    'anyanwumargret@gmail.com',
    'legendaryconcept087@gmail.com',
    'achinivuok@yahoo.co.uk',
    'funkeadeniyifa@gmail.com',
    'ugoukaude@gmail.com',
    'ema.edosio@gmail.com',
    'robbyawodu@gmail.com',
    'AKADRAUSTIN@GMAIL.COM',
    'benisco2016@gmail.com',
    'semmy4love@gmail.com',
    'fdayibarafa@yahoo.com',
    'ehinmorobola@yahoo.com',
    'temitopemariam.ms@gmail.com',
    'austineokwelume@gmail.com',
    'aderemifayoyiwa@gmail.com',
    'mope.ajao@gmail.com',
    'rume4u@yahoo.com',
    'oyebolamodu@gmail.com',
    'akinyomade@gmail.com',
    'orinayooyelade@gmail.com',
    'ghedoknee@gmail.com',
    'tb2ndus@googlemail.com',
    'faithlarry667@gmail.com',
    'estherajiboye@gmail.com',
    'pierrevpalmer@gmail.com',
    'adedurojaiye91@gmail.com',
    'nduevidencechigozie@gmail.com',
    'writeprovidence@gmail.com',
    'toluwani_layode@yahoo.com',
    'john.alabi89@gmail.com',
    'pheliks55555@gmail.com',
    'jamund2k@yahoo.co.uk',
    'nenentofon@gmail.com',
    'detayoadedeji@gmail.com',
    'architecteve@gmail.com',
    'debbieanlak@gmail.com',
    'umemeziac@yahoo.com',
    'abibabello.ab@gmail.com',
    'johnxdifu@gmail.com',
    'Oghomienortega@gmail.com',
    'chinelocokpala@gmail.com',
    'olubobokunseyanu@gmail.com',
    'passamediavp@gmail.com',
    'jublinksagboola@gmail.com',
    'ilobaboss54@gmail.com',
    'cynthia.onyenwenwa@gmail.com',
    'talk2awi@yahoo.com',
    'tweentee4u@yahoo.com',
    'onyemambarah@yahoo.com',
    'onyxabc92@gmail.com',
    'steveanthony459@gmail.com',
    'amadichinevu@yahoo.com',
    'segun4michael@yahoo.co.uk',
    'toyinfals1@yahoo.com',
    'OLACHIOLATUNJI@YAHOO.COM',
    'obianujuchioma.okafor@gmail.com',
    'Oluwatobi1269@yahoo.com',
    'osikiru77@gmail.com',
    'gcsholley@yahoo.com',
    'theosammultimedia@gmail.com',
    'gettofayoyiwajide@gmail.com',
    'arinbuayonigltd@gmail.com',
    'leumasservices@gmail.com',
    'tundealfred36@gmail.com',
    'dapsy15@gmail.com',
    'mubarakly@gmail.com',
    'ireolapade2@gmail.com',
    'chidi.egwu@yahoo.com',
    'adesanyaadeoti@gmail.com',
    'ajokeare@gmail.com',
    'otegbayo.olaoluwa@gmail.com',
    'aojiakor@yahoo.com',
    'jfissy@gmail.com',
    'ghaliru7@gmail.com',
    'tola.ogundare@yahoo.com',
    'jilatobi@yahoo.co.uk',
    'alomj382@gmail.com',
    'kingsadjo2@gmail.com',
    'Sulymanabdulgafar1996@gmail.com',
    'oluwatobilobadonald@gmail.com',
    'tolulopewilliamabe@gmail.com',
    'busolahadeniyi@gmail.com',
    'opedinas@gmail.com',
    'amipet11@yahoo.com',
    'kadeniran2299@yahoo.com',
    'obainoforgod@gmail.com',
    'JUVEX44@GMAIL.COM',
    'arhamerenep@gmail.com',
    'rukysalami@yahoo.com',
    'davosha@outlook.com',
    'ayodelemotunrayo772@yahoo.com',
    'gbadegesinsulaimon@gmail.com',
    'balodeji777@gmail.com',
    'emirfrosh@gmail.com',
    'bumcious@gmail.com',
    'abbaabdulbasit@gmail.com',
    'ogundipeomoodunayo@gmail.com',
    'theMharcqk@gmail.com',
    'chikenicholas@yahoo.com',
    'Okosunvictor97@gmail.com',
    'michealfocus13@gmail.com',
    'gbolahan.akinola@yahoo.com',
    'victorfemijo@gmail.com',
    'ohisw1234@gmail.com',
    'ikaysbox@yahoo.com',
    'e.obilikwu@gmail.com',
    'thetgduchi@gmail.com',
    'shalomwichendu@gmail.com',
    'nwankwoijeomasusan@gmail.com',
    'john@gmail.com',
    'isohary@yahoo.com',
    'iyiegbuniwen@gmail.com',
    'c_egonu@yahoo.com',
    'tifedada@gmail.com',
    'atvindy@gmail.com',
    'aadenitan@gmail.com',
    'fneegee@gmail.com',
    'ayobamiodulana@yahoo.com',
    'tuase5000@yahoo.com',
    'ayoerayetan@yahoo.com',
    'ejiadeyemi@yahoo.com']);

    $users->each(function($user){
        $user = User::create([
            'email' => $user,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
        ]);

        Vestbank::create([
            'user_id' => $user->id
        ]);

        Bank::create([
            'user_id' => $user->id,
            'last_update' => now()
        ]);
    });
    }

}
