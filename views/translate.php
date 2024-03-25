<?php


$lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'en';

putenv("LC_ALL=$lang");
setlocale(LC_ALL, $lang);

$dir='ltr';



if($lang=='ar'){
$dir='rtl';
}else{
  $dir='ltr';
}
$welcomMesag=[
  'en'=>'Welcome Message',
  'ar'=>'رسالة ترحيب'
];

$Subtitles=[
'org_Profile'=>[
  'en'=>'Company Profile',
  'ar'=>'نبذه عن الشركة',
],
'orgName'=>[
  'en'=>'WECANDO COMPANY',
'ar'=>'شركة ويكاندو'],
'hse'=>[
  'en'=>'HEALTH, SAFETY AND ENVIRONMENT',
  'ar'=>'الصحة والسلامة والبيئة'
],

'contactus'=>[
  'hero'=>[
    'vision'=>[
    'en'=>'Our Vision',
    'ar'=>'مهمتنا'
  ],
  'Mission'=>[
    'en'=>'Our Mission',
    'ar'=>'رؤيتنا'
  ],
  'Goals'=>[
    'en'=>'Our Goals',
    'ar'=>'أهدافنا'
  ],
],
  
  'contact'=>[
    'email'=>[
      'en'=>'Email :',
      'ar'=>'ايميل :'
    ],
    'Location'=>[
      'en'=>'Location :',
      'ar'=>'موقعنا :' 
    ],
    'Call'=>[
      'en'=>'Call :',
      'ar'=>'تلفون :'
    ],


  ],
  'header'=>[
  'en'=>'CONTACT US',
  'ar'=>'اتصل بنا'
  ],
],
'contact'=>[
  'en'=>'CONTACT',
  'ar'=>'تواصل'
]
];


$navBar=[
'home'=>[
  'en'=>'Home',
  'ar'=>'الصفحة الرئيسيه'
],
'About'=>[
  'en'=>'About',
  'ar'=>'من نحن'
],
'Contact'=>[
  'en'=>'Contact',
  'ar'=>'بيانات التواصل'
],
'Services'=>[
  'en'=>'Services',
  'ar'=>'خدماتنا'
],
'HSE'=>[
  'en'=>'HSE',
  'ar'=>'الصحة والسلامة'
],

];



$orgName=[
  'en'=>'WECANDO COMPANY',
'ar'=>'شركة ويكاندو'];

$OurVision = [
  'en' => 'To be the preferred partner in construction, logistics, and petroleum services,
  driving sustainable development and exceeding client expectations. Focused on the future in our core
  markets and also apply our experience to build up our position in the new markets. We train, develop,
  promote, and motivate efficient employees with integrity.',
  'ar' => 'أن نكون الشريك المفضل في مجال البناء والخدمات اللوجستية والخدمات البترولية، ودفع التنمية المستدامة وتجاوز توقعات العملاء. نركز على المستقبل في أسواقنا الأساسية ونطبق أيضًا خبرتنا لبناء مكانتنا في الأسواق الجديدة. نحن نقوم بتدريب وتطوير وتعزيز وتحفيز الموظفين الأكفاء بنزاهة.',
 
];
$OurMission =[
  'en' => 'Our mission is to deliver exceptional construction, logistics, and petroleum services that exceed client expectations. We strive to contribute to the growth and development of Yemen\'s infrastructure while prioritizing safety, quality, and environmental sustainability.',
  'ar' => 'هدفنا هو توفير خدمات البناء والتوسيع والأسواق البترويلية مثالية تتجاوز متوقعات العملاء. نهتم بمساهمتنا في نمو وتطور إنفراسترات يمن بينما نحتل قدرات السلامة والجودة والمحافظة على البيئة.'

];

$OurGoals =[
  'en' => '1- Deliver high-quality projects on time and within budget, ensuring client satisfaction.
  2- Expand our service offerings to meet the evolving needs of the construction, logistics, and
                          petroleum industries.
  3- Foster long-term partnerships with clients, suppliers, and stakeholders based on trust,
                          transparency, and mutual growth.
              
  4- Promote sustainable practices and minimize the environmental impact of our operations.',
    'ar' => '1- تسليم مشاريع ذات جودة عالية في الوقت وضمن الميزانية، وتضمين رضا العملاء.
  2- توسيع نطاق توفير الخدمات لتوافق تطلعات صناع البناء والتوسيع ومجالات الأسواق البترويلية التطور.
  3- تعزيز التعاملات الطويلة الأمد مع العملاء والموردين واللهاما من حلمان الثقة والشفافية والنمو المشترك.
  
  4- تروي ممارسات مستدامة وتخفيض أثر البيئة لعملياتنا.'

];


$wellcomMesage=[
  'en'=>'<p class="fst-italic">
  Ladies and gentlemen,<br>
  As the General Director of WECANDO Construction Contracting,
  Oil, and Logistics Services, I want to express my gratitude for
  your interest in our company. At WECANDO, we are dedicated
  to delivering exceptional results in the fields of construction,
  contracting, oil, and logistics. In construction, we have successfully completed various projects, from
  residential to infrastructure developments, ensuring the highest quality standards and
  timely completion. </p><br>
<p>
  In the oil sector, we actively support and promote investments,
  contributing to the growth of Yemen\'s economy Our logistics
  services provide efficient solutions for air and sea cargo handling, customs documentation, warehousing,
  and transportation. Collaboration is a key principle for us, as we seek partnerships to enhance our
  expertise and drive mutual growth.
  We have a talented and committed team who consistently deliver exceptional services to our clients.<br>
  Thank you for your support, <br>
  and we look forward to future collaborations
</p><br>
<p>
  Senator: Ali AL-Shabwani
</p>',
    'ar'=>'<p class="fst-italic">
    السيدات والسادة,<br>
    بصفته المدير العام لشركة WECANDO لمقاولات البناء،
   الخدمات النفطية واللوجستية، أود أن أعرب عن امتناني لها
   اهتمامك بشركتنا. في WECANDO، نحن ملتزمون
   لتحقيق نتائج استثنائية في مجالات البناء،
   المقاولات والنفط والخدمات اللوجستية. في مجال البناء، أكملنا بنجاح مشاريع مختلفة، من
   السكنية لتطوير البنية التحتية، وضمان أعلى معايير الجودة و
   الانتهاء في الوقت المناسب.</p><br>
  <p>
  وفي قطاع النفط، نقوم بدعم وتشجيع الاستثمارات بشكل فعال،
  المساهمة في نمو الاقتصاد اليمني. خدماتنا اللوجستية
  توفر الخدمات حلولاً فعالة لمناولة الشحن الجوي والبحري، والوثائق الجمركية، والتخزين،
  والنقل. التعاون هو مبدأ أساسي بالنسبة لنا، حيث نسعى إلى إقامة شراكات لتعزيز أعمالنا
  الخبرة ودفع النمو المتبادل.
  لدينا فريق موهوب وملتزم يقدم باستمرار خدمات استثنائية لعملائنا.<br>
  شكرا لدعمكم، <br>
  ونحن نتطلع إلى التعاون في المستقبل
  </p><br>
  <p>
  المؤسس : علي الشبواني
  </p>',
];

$org_profile=[
  'en'=>'  <div class="company-profile">
  <!-- <h1>Company Profile</h1> -->
  <p>Dear Valued Client,</p>
  <p >During the last 29 years, WECANDO has been operating successfully as a construction contractor in
    numerous work
    areas such as electromechanical works, earthwork, concrete work, building construction,steel
    fabrication, finishing, erection services, mechanical, electrical, instrumentation work, water
    supply, sewage treatment systems, road construction, and maintenance. Furthermore, from the first
    year of establishing WECANDO, it has been known as a professional company in the field of customs
    clearance, and transportation of materials/equipment either heavy or light as well as Oil and Gas
    products all over Yemen. WECANDO has expanded its work activities to cover various oilfields related
    to supply and construction projects. Examples of our work included the supply and construction of
    pipelines, process plants, wellheads Tie-ins, and water/gas re-injection projects. Currently,
    WECANDO is planning to be strongly involved in several contractual projects with major oil companies
    working in Yemen together with our associated international companies working in the fields of civil
    engineering, buildings and structures; petroleum industry. This company profile provides a
    comprehensive overview of our vision, mission, goals, services, quality and safety policies, as well
    as our core values and principles.
  </p>
</div>',
'ar'=>'  <div class="company-profile">
<!-- <h1>Company Profile</h1> -->
<p>عزيزي العميل,</p>
<p >خلال الـ 29 عامًا الماضية، عملت WECANDO بنجاح كمقاول بناء في
العديد من الأعمال
مجالات مثل الأعمال الكهروميكانيكية وأعمال الحفر والأعمال الخرسانية وتشييد المباني والصلب
التصنيع والتشطيب وخدمات التركيب والأعمال الميكانيكية والكهربائية وأعمال الأجهزة والمياه
التوريد وأنظمة معالجة مياه الصرف الصحي وبناء الطرق والصيانة. علاوة على ذلك، من الأول
منذ عام تأسيس WECANDO، أصبحت معروفة كشركة محترفة في مجال الجمارك
التخليص ونقل المواد/المعدات سواء الثقيلة أو الخفيفة وكذلك النفط والغاز
المنتجات في جميع أنحاء اليمن. قامت WECANDO بتوسيع أنشطة عملها لتغطية مختلف حقول النفط ذات الصلة
لتوريد ومشاريع البناء. ومن أمثلة أعمالنا توريد وبناء
خطوط الأنابيب، ومحطات المعالجة، ورؤوس الآبار، ومشاريع إعادة حقن المياه/الغاز. حالياً،
تخطط WECANDO للمشاركة بقوة في العديد من المشاريع التعاقدية مع شركات النفط الكبرى
العمل في اليمن مع الشركات العالمية المرتبطة بنا العاملة في المجالات المدنية
الهندسة والمباني والهياكل. صناعة النفط. يوفر ملف تعريف الشركة هذا
نظرة شاملة على رؤيتنا ورسالتنا وأهدافنا وخدماتنا وسياسات الجودة والسلامة أيضًا
كقيمنا ومبادئنا الأساسية.
</p>
</div> ',


];
$hse1=[
  'en'=>'Our First priority at WECANDO is to make sure that practical and
  effective measures are in place to protect the health and safety of our employees, and contractors.
  In implementing this policy, WECANDO not only complies with latest relevant legislation of health,
  safety and environment but also encourages other initiatives for protecting the health, safety and
  environment of those affected by its activities.',
  'ar'=>'أولويتنا الأولى في WECANDO هي التأكد من أن ذلك عملي و
  يتم وضع تدابير فعالة لحماية صحة وسلامة موظفينا ومقاولينا.
  في تنفيذ هذه السياسة، لا تتوافق WECANDO فقط مع أحدث التشريعات ذات الصلة بالصحة،
  السلامة والبيئة ولكنه يشجع أيضًا المبادرات الأخرى لحماية الصحة والسلامة والبيئة
  بيئة المتأثرين بأنشطتها.'
];
$hse2=[
  'en'=>'ECANDO specific objectives are to provide safe and healthy
  working conditions for all employees, and to maintain the highest safety standards in relation to
  systems of work and equipment operations.
  Furthermore, through training, supervision and provision of information, the company is committed to
  ensuring a safe place of work for both WECANDO employees and all others who come into contact with
  them.',
  'ar'=>'أهداف ECANDO المحددة هي توفير السلامة والصحة
  ظروف العمل لجميع الموظفين، والحفاظ على أعلى معايير السلامة فيما يتعلق
  أنظمة العمل وعمليات المعدات.
  علاوة على ذلك، تلتزم الشركة من خلال التدريب والإشراف وتوفير المعلومات
  ضمان مكان عمل آمن لكل من موظفي WECANDO وجميع الآخرين الذين يتعاملون معهم
  هم.'
];
$Services=[
'elmentservice'=>[
  'CONSTRUCTION'=>[
'en'=>'CONSTRUCTION SERVICES',
'ar'=>'خدمات البناء'

  ],
  'LOGISTICS'=>[
    'en'=>'LOGISTICS SERVICES',
    'ar'=>'الخدمات اللوجستية'

  ],
  'RENTING'=>[
    'en'=>'RENTING',
    'ar'=>'التأجير'

  ],
  'CONSULTATION'=>[
    'en'=>'WAREHOUSING',
    'ar'=>'الخدمات الاستشارية'

  ],
  'PETROLEUM'=>[
    'en'=>'PETROLEUM SERVICES',
    'ar'=>'خدمات البترول'

  ]

],
'content_elmentservice'=>[
  'CONSTRUCTION'=>[
'en'=>'<p>The main business scope is the services of oil construction, work over & maintenance of oil and gas fields. Our own business management system, ensures that the drilling services can be implemented safely, efficiently, and accurately according to all clients\' requirements. We are very careful at choosing the qualified engineers and laborers they have long experience to make sure you get the good quality in your work.</p>',
'ar'=>'<p>تتبع المشاريع الرئيسية لنا مع قابلة التنفيذ الكامل لجميع عمليات إنتاج الأشياء. لقد نجحنا في تحقيق معدل نجاح مرتفع من حيث جودة الأعمال وكفاءة الفريق.
أعضاء فريقنا مرتبطون بالتحديثات المحلية والدولية في علم البترول. نحن نتمكن من توفير خدمات تطويرية وفنية لمجتمع البترول في الوطن العربي وخارجه.
ترتدي العمليات الفنية لنا من خلال فريق من المهندسين والعاملين ذوي الخبرة الطويلة. ونريد أن نكون قدرة على تقديم خدمات فنية متنوعة ومتكاملة لعملائنا.
من خلال استخدام أحدث التقنيات والمعادلات، نتطلع إلى توفير أفضل الأجوبد لعملائنا. ونريد أن نكون قدرة على تلبية جميع احتياجات العملاء في مجال إنتاج الأشياء بكفاءة عالية.
</p>'

  ],
  'LOGISTICS'=>[
    'en'=>'<p>WECANDO depends on a reliable fleet to transport materials and equipment from and/or any destination in the Republic of Yemen. WECANDO has associated with companies to provide international transportation from and/or to Gulf Countries. We have a number of logistical support bases in various locations to ensure on-time mobilization and swift response to our clients’ logistical needs. The effective mobilization for our projects is a result of effective support staff capable of operating within local limitations and constraints. As part of its indispensable logistic support, WECANDO has its own camp units, provided to other companies. We supply and install complete camps with all services such as power generation, water supply and sewage treatment systems, and associated site works and services.</p>',
    'ar'=>'<p>
    يستخدم فريقنا أحدث التقنيات والمعادلات لتوفير أفضل الأجوبد لعملائنا. نتطلع إلى توفير خدمات فنية متنوعة ومتكاملة لعملائنا في مجال إنتاج الأشياء بكفاءة عالية.
    أعضاء فريقنا مرتبطون بالتحديثات المحلية والدولية في علم البترول. نحن نتمكن من توفير خدمات تطويرية وفنية لمجتمع البترول في الوطن العربي وخارجه.
    من خلال استخدام أحدث التقنيات والمعادلات، نتطلع إلى توفير أفضل الأجوبد لعملائنا. ونريد أن نكون قدرة على تلبية جميع احتياجات العملاء في مجال إنتاج الأشياء بكفاءة عالية.
    نتمكن من توفير خدمات تطويرية وفنية لمجتمع البترول في الوطن العربي وخارجه.
     </p> '

  ],
  'RENTING'=>[
    'en'=>'<p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p> ',
    'ar'=>'<p> تقدم WECANDOO خدمات تأجير المعدات. نحن نقدم مجموعة متنوعة من المعدات لمختلف الصناعات والمشاريع، بما في ذلك الإنشاء والتصنيع واللوجستيات يمكن للعملاء استئجار المعدات لمدة قصيرة أو طويلة الأجل اعتمادا على احتياجاتهم المحددة تضمن WECANDOO أن المعدات المستأجرة لديها صيانة جيدة وجاهزة للاستخدام. بفضل التزامها برضى العملاء واللوجستيات الفعالة، تعتبر WECANDOO مزودا موثوقا لحلول تأجير المعدات. </p>'

  ],
  'CONSULTATION'=>[
    'en'=>'<p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>',
    'ar'=>'<p> Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>'

  ],
  'PETROLEUM'=>[
    'en'=>'<p>WECANDOO recognizes the significance of the petroleum 
    industry in Yemen\'s economy. We provide specialized services 
    tailored to the unique requirements of this sector. Our expertise 
    in petroleum services encompasses transportation, storage, 
    and distribution of oil and gas products. We ensure the safe 
    handling and delivery of these resources, adhering to industry 
    standards and regulations. With our strong network and fleet 
    of vehicles, we facilitate the efficient movement of petroleum 
    products, supporting the growth and development of the 
    energy sector in Yemen.</p>',

    'ar'=>'<p>تدرك شركة WECANDOO أهمية النفط  في الاقتصاد اليمني نحن نقدم خدمات متخصصة مصممة خصيصًا لتلبية المتطلبات الفريدة لهذا القطاع. خبرتنا في الخدمات البترولية تشمل النقل والتخزين وتوزيع منتجات النفط والغاز. نحن نضمن السلامة
    التعامل مع هذه الموارد وتسليمها، والالتزام بالصناعة المعايير واللوائح. بفضل شبكتنا وأسطولنا القوي من المركبات، ونحن نسهل الحركة الفعالة للبترول المنتجات، ودعم نمو وتطور قطاع الطاقة في اليمن </p> '


  ]

]

]
?>

