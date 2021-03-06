<?php
/*
for more information: see languages.txt in the lang folder.
*/
$ImportAikenQuizExplanationExample = "Toto je text pre otázku 1 A. Odpoveď 1 B. Odpoveď 2 C. Odpoveď 3 ANSWER: B Toto je text pre otázku 2 A. Odpoveď 1 B. Odpoveď 2 C. Odpoveď 3 D. Odpoveď 4 ANSWER: D ANSWER_EXPLANATION: to je voliteľná komentár spätnej väzby, ktorý sa zobrazí vedľa správnej odpovede.";
$ImportAikenQuizExplanation = "Formát Aiken je v jednoduchom textovom súbore (.txt), s niekoľkými blokmi otázok, z ktorých každý je oddelený prázdnym riadkom. Prvý riadok je otázka, riadky s odpoveďou je označený písmenom a bodkou, a správna odpoveď príde s ďalšou ODPOVEĎOU: predpona. Viď príklad nižšie.";
$ExerciseAikenErrorNoAnswerOptionGiven = "Importovaný súbor má aspoň jednu otázku bez odpovede (alebo odpovede neobsahujú požadovanú predponu listu). Uistite sa, že každá otázka má aspoň jednu odpoveď, a že má predponu písmeno a bodkou alebo zátvorku, ako je tento: A. jednu odpoveď";
$ExerciseAikenErrorNoCorrectAnswerDefined = "Importovaný súbor obsahuje aspoň jednu otázku bez akejkoľvek správnej definovanej odpovede. Uistite sa, že všetky otázky majú ODPOVEĎ: [Letter] riadok.";
$ThereWasAProblemWithYourFile = "Bol tam neznámy problém so súborom. Prosím skontrolujte jeho formát a skúste to znova.";
$YouMustUploadAZipOrTxtFile = "Musíte nahrať .txt alebo .zip súbor";
$NoTxtFileFoundInTheZip = "Nenájdený žiadny .txt súbor v súbore zip";
$ImportAikenQuiz = "Importovať Aiken test";
$ExerciseWasActivatedFromXToY = "Cvičenie bolo aktivované od %s do %s";
$SelectAnAnswerToContinue = "Vyberte odpoveď pre pokračovanie";
$IfYouContinueYourAnswerWillBeSavedAnyChangeWillBeNotAllowed = "Ak budete pokračovať vaše odpovede budú uložené, akákoľvek zmena urobená neskôr nie je dovolená. Ste si istí, že chcete pokračovať?";
$YesImSure = "Áno, som si istý!";
$NoIWantToTurnBack = "Nie, chcem pokračovať v cvičení.";
$QuestionReused = "Otázka pridaná do cvičenia";
$QuestionCopied = "Otázka skopírovaná do cvičenia";
$ZeroMeansNoQuestionWillBeSelectedMinusOneMeansThatAllQuestionsWillBeSelected = "-1 = Budú vybrané všetky otázky. 0 = Budú vybrané žiadne otázky.";
$EmailNotificationTemplateDescription = "Môžete prispôsobiť e-mail, ktorý sa posiela používateľom pri dokončení cvičenia. Môžete použiť tieto značky:<br>
1. {{ student.username }} 2. {{ student.firstname }} 3. {{ student.lastname }} 4. {{ student.official_code }} 5. {{ exercise.title }} 6. {{ exercise.start_time }} 7. {{ exercise.end_time }} 8. {{ course.title }} 9. {{ course.code }}";
$EmailNotificationTemplate = "Šablóna e-mailu upozornenia";
$ExerciseEndButtonDisconnect = "Odhlásiť";
$ExerciseEndButtonExerciseHome = "Zoznam cvičenia.";
$ExerciseEndButtonCourseHome = "Domov kurzu";
$ExerciseEndButton = "Domovská stránka kurzu";
$HideQuestionTitle = "Skryť názov otázky";
$QuestionSelection = "Vyberte typ otázky";
$OrderedCategoriesByParentWithQuestionsRandom = "Zoradené kategórie podľa rodiča s náhodnými otázkami";
$OrderedCategoriesByParentWithQuestionsOrdered = "Zoradené kategórie podľa rodiča so zoradenými otázkami";
$RandomCategoriesWithRandomQuestionsNoQuestionGrouped = "Náhodné kategórie s náhodnými otázkami (nezoskupené otázky)";
$RandomCategoriesWithQuestionsOrderedNoQuestionGrouped = "Náhodné kategórie so zoradenými otázkami (nezoskupené otázky)";
$RandomCategoriesWithRandomQuestions = "Náhodné kategórie s náhodnými otázkami";
$OrderedCategoriesAlphabeticallyWithRandomQuestions = "Zoradené kategórie abecedne s náhodnými otázkami";
$RandomCategoriesWithQuestionsOrdered = "Náhodné kategórie so zoradenými otázkami";
$OrderedCategoriesAlphabeticallyWithQuestionsOrdered = "Zoradené kategórie abecedne so zoradenými otázkami";
$UsingCategories = "Používané kategórie";
$OrderedByUser = "Zoradené podľa používateľa";
$ToReview = "Bude skontrolovaná";
$Unanswered = "Nezodpovedané";
$Answered = "Zodpovedané";
$CurrentQuestion = "Aktuálna otázka";
$MediaQuestions = "Zdieľané vyhlásenia";
$AddedToLPCannotBeAccessed = "Toto zadanie bolo zahrnuté do učebnej osnovy, nemôže byť zobrazené študentmi priamo tu. Ak chcete, aby rovnaké zadanie bolo k dispozícii prostredníctvom nástroja zadanie, prosím urobte kópiu aktuálneho zadania pomocou ikony kopírovania.";
$langExercice = "Test";
$langActivate = "Ukázať";
$langDeactivate = "Skryť";
$langNoEx = "Momentálne tu nie je žiadny test";
$langNewEx = "Nový test";
$langQuestion = "Otázka";
$langQuestions = "Otázky";
$langAnswers = "Odpovede";
$langTrue = "Pravda";
$langAnswer = "Odpoveď";
$langResult = "Výsledok";
$langNoResult = "Zatiaľ bez výsledku";
$langYourResults = "Vaše výsledky";
$langStudentResults = "Výsledky študentov";
$langExerciseType = "Typ testu";
$langExerciseName = "Názov testu";
$langExerciseDescription = "Popis testu + obrázok alebo audio alebo video";
$langSimpleExercise = "Otázky na jednej strane";
$langSequentialExercise = "Jedna otázka na stranu (postupne)";
$langRandomQuestions = "Náhodne vybrané otázky";
$langGiveExerciseName = "Prosím zadajte názov testu";
$langSound = "Audio alebo video súbor";
$langDeleteSound = "Zmazať audio alebo video súbor";
$langNoAnswer = "Momentálne žiadna odpoveď";
$langGoBackToQuestionPool = "Späť na zásobník otázok";
$langGoBackToQuestionList = "Späť na zoznam otázok";
$langQuestionAnswers = "Odpovede na otázku";
$langUsedInSeveralExercises = "Upozornenie ! Tto otázka a jej odpovede sú použité vo viacerých testoch. Chcete ich zmeniť";
$langModifyInAllExercises = "vo všetkých testoch";
$langModifyInThisExercise = "len v aktuálnom teste";
$langAnswerType = "Typ odpovede";
$langMultipleSelect = "Viacero odpovedí";
$langFillBlanks = "Vyplnenie prázdnych miest";
$langMatching = "Párovanie";
$langAddPicture = "Pridať obrázok";
$langReplacePicture = "Nahradiť obrázok";
$langDeletePicture = "Zmazať obrázok";
$langQuestionDescription = "Dodatočný text, obrázok, audio alebo video";
$langGiveQuestion = "Prosím napíšte otázku";
$langWeightingForEachBlank = "Prosím zadajte skóre pre každé prázdne miesto";
$langUseTagForBlank = "použiť hranaté zátvorky [...] na definovanie jedného alebo viacerých prázdnych miest";
$langQuestionWeighting = "Váha";
$langMoreAnswers = "+odp";
$langLessAnswers = "-odp";
$langMoreElements = "+prvok";
$langLessElements = "-prvok";
$langTypeTextBelow = "Prosím napíšte svoj text nižšie";
$langDefaultTextInBlanks = "[Briti] žijú vo [Veľkej Británii].";
$langDefaultMatchingOptA = "bohatý";
$langDefaultMatchingOptB = "pekný";
$langDefaultMakeCorrespond1 = "Tvoj otec je";
$langDefaultMakeCorrespond2 = "Tvoja matka je";
$langDefineOptions = "Prosím definujte možnosti";
$langMakeCorrespond = "Porovnať";
$langFillLists = "Prosím vyplnte dva zoznamy nižšie";
$langGiveText = "Prosím napíšte text";
$langDefineBlanks = "Definujte prosím aspoň jedno prázdne miesto pomocou hranatých zátvoriek [...]";
$langGiveAnswers = "Prosím napíšte odpoveď na otázku";
$langChooseGoodAnswer = "Prosím označte správnu odpoveď";
$langChooseGoodAnswers = "Prosím označte jednu alebo viac správnych odpovedí";
$langQuestionList = "Zoznam otázok testu";
$langMoveUp = "Presunúť hore";
$langMoveDown = "Presunúť dole";
$langGetExistingQuestion = "Zásobník otázok";
$langFinishTest = "Ukončiť test";
$langQuestionPool = "Zásobník otázok";
$langOrphanQuestions = "Osirotené otázky";
$langNoQuestion = "Momentálne nie sú žiadne otázky";
$langAllExercises = "Všetky testy";
$langFilter = "Filter";
$langGoBackToEx = "Vrátiť sa na test";
$langReuse = "Znova použiť";
$langExerciseManagement = "Správa testov";
$langQuestionManagement = "Správa otázok / odpovedí";
$langQuestionNotFound = "Otázka nenájdená";
$langExerciseNotFound = "Test nenájdený alebo neviditeľný";
$langAlreadyAnswered = "Otázku ste už zodpovedali";
$langElementList = "Zoznam elementov";
$langScore = "Skóre";
$langCorrespondsTo = "Zodpovedá";
$langExpectedChoice = "Očakávaná voľba";
$langYourTotalScore = "Celkové skóre z testu";
$ReachedMaxAttemptsAdmin = "Dosiahli ste maximálny počet pokusov pre tento test. Ak ste lektorom, môžete prejsť na cvičenie, ale vaše výsledky nebudú hlásené.";
$langExerciseAdded = "Cvičenie bolo pridané";
$Build = "Postaviť";
$langEvalSet = "Nastavenie hodnotenia";
$langActive = "aktívny";
$langInactive = "neaktívny";
$langQuestCreate = "Vytvoriť otázky";
$langExRecord = "vaše cvičenie bolo uložené";
$langBackModif = "späť na stránku pre úpravu otázok";
$langDoEx = "urobiť cvičenie";
$langDefScor = "popísať hodnotiace parametre";
$langCreateModif = "vytvoriť / zmeniť otázky";
$langSub = "Podtitul";
$langMyAnswer = "Moja odpoveď";
$langMorA = "+ odpoveď";
$langLesA = "- odpoveď";
$langRecEx = "uložiť cvičenie";
$langRecQu = "Pridať otázku do testu";
$langRecAns = "Uložiť odpovede";
$langIntroduction = "Úvod";
$langTitleAssistant = "Pomocník pre tvorbu testov";
$langQuesList = "zoznam otázok";
$langSaveEx = "uložiť cvičenia";
$langFinish = "Ukončiť test";
$langCancel = "Zrušiť";
$langQImage = "Otázka s obrázkom";
$langAddQ = "Pridať otázku";
$langDoAnEx = "Urobiť cvičenie";
$langGenerator = "Zoznam cvičení";
$langChoice = "Vaša voľba";
$langCorrect = "Správne";
$langPossAnsw = "Počet dobrých odpovedí na jednu otázku";
$langStudAnsw = "počet chýb študentov";
$langDetermine = "Určiť";
$langNonNumber = "nečíselná hodnota";
$langReplaced = "Vymenený";
$langSuperior = "hodnota väčšia ako 20";
$langRep20 = "Nahradiť 20";
$langDefault = "Prednastavené hodnoty *";
$langDefComment = "predchádzajúce hodnoty budú nahradené kliknutím na tlačidlo \"prednastavené hodnoty\"";
$langScoreGet = "čierne čísla = skóre";
$langShowScor = "Zobraziť hodnotenie študentom:";
$langStep1 = "Etapa 1";
$langStep2 = "Etapa 2";
$langTake = "vziať";
$langAmong = "medzi";
$langImportHotPotatoesQuiz = "Importovať HotPotatoes testy";
$langHotPotatoesTests = "Importovať HotPotatoes testy";
$langDownloadFile = "Uložiť súbor na server";
$langDownloadImg = "Načítať obrázkový súbor na server";
$langDownloadEnd = "Ukladanie ukončené";
$langNoSpace = "Načítavanie nebolo úspešné. Buď ste prekročili maximálnu kvótu alebo na disku nie je dosť miesta.";
$langZipNoPhp = "Súbor typu ZIP nemôže obsahovať .PHP súbory";
$langNoImg = "Test bez obrázkov";
$langImgNote_st = "<br> Ešte musíte načítať";
$langImgNote_en = "obrázok(y) :";
$langDocDeleted = "Dokument zmazaný";
$langViMod = "Viditeľnosť je upravená";
$langNameNotEqual = "je neplatný súbor !";
$langIndice = "Index";
$langIndices = "Indexy";
$langDateExo = "Dátum";
$langShowQuestion = "Zobraziť otázku";
$langUnknownExercise = "Neznáme cvičenie";
$langReuseQuestion = "Znova použiť otázku";
$langCreateExercise = "Vytvoriť cvičenie";
$langCreateQuestion = "Vytvoriť otázku";
$langCreateAnswers = "Vytvoriť odpovede";
$langModifyExercise = "Zmeniť cvičenie";
$langModifyAnswers = "zmeniť odpovede";
$langForExercise = "pre cvičenie";
$langUseExistantQuestion = "Použiť existujúcu otázku";
$FreeAnswer = "Otvorená otázka";
$notCorrectedYet = "Táto odpoveď ešte nebola opravená. Zatiaľ je Vaše skóre za túto otázku 0 a ovplyvňuje aj celkové skóre testu.";
$adminHP = "Administrátor Hot Potatoes";
$NewQu = "Nová otázka";
$NoImage = "Prosím vyberte obrázok";
$langAnswerHotspot = "Popis a vyhodnotenie sú požadované pre každý hotspot - spätná väzba je nepovinná";
$langMinHotspot = "Musíte vytvoriť aspoň jeden (1) hotspot.";
$langMaxHotspot = "Maximálny počet hotspots, ktoré môžete vytvoriť je dvanásť (12).";
$langHotspotError = "Vyplnte prosím popis a váhy pre každý hotspot.";
$langMoreHotspots = "+hotspot";
$langLessHotspots = "-hotspot";
$langHotspotZones = "Zóny obrázkov";
$langNextQuestion = "Ďalšia otázka";
$langCorrectAnswer = "Správna odpoveď";
$langHotspotHit = "Vaša odpoveď bola";
$langOnlyJPG = "Pre hotspots môžete použiť len obrázky vo formáte JPG (alebo JPEG)";
$langFinishThisTest = "Zobraziť správne odpovede na otázky a dosiahnuté skóre.";
$langAllQuestions = "Všetky otázky";
$langModifyTitleDescription = "Upraviť názov a popis";
$langModifyHotspots = "Upraviť odpovede/hotspots";
$langHotspotNotDrawn = "Ešte nemáte vypracované všetky hotspoty";
$langHotspotWeightingError = "Musíte zadať kladnú (>0) váhu pre všetky hotspots";
$langHotspotValidateError1 = "Mali by ste úplne odpovedať na otázku (";
$langHotspotValidateError2 = "Pred pozretím výsledkov je potrebné kliknúť na obrázok (obrázky)";
$langHotspotRequired = "Popis a bodovanie sa požadujú pre každý hotspot. Spätná väzba je voliteľná.";
$langHotspotChoose = "Ak chcete vytvoriť hotspot: vyberte obrazec vedľa farby a nakreslite hotspot. Ak chcete presunúť hotspot, vyberte farbu, kliknite na iné miesto v obrázku a nakreslite hotspot. Ak chcete pridať hotspot: kliknite na tlačidlo Pridať hotspot. Ak chcete zatvoriť mnohouhoľník: kliknite pravým tlačidlom myši a vyberte položku Zavrieť mnohouhoľník.";
$Fault = "Nesprávne";
$HotSpot = "Zóny obrázkov";
$ClickNumber = "Kliknúť číslo";
$HotspotGiveAnswers = "Prosím zadajte odpoveď";
$Addlimits = "Pridať limity";
$AreYouSure = "Ste si istý";
$StudentScore = "Skóre študenta";
$backtoTesthome = "Späť na domovskú stránku testu";
$Feedback = "Spätná väzba";
$MarkIsUpdated = "Známka bola aktualizovaná";
$MarkInserted = "Známka je vložená";
$PleaseGiveAMark = "Prosím zadajte známku";
$EditCommentsAndMarks = "Upraviť spätnú väzbu a známku v otvorenej otázke";
$AddComments = "Pridať spätnú väzbu";
$Number = "Číslo";
$Weighting = "Skóre";
$ChooseQuestionType = "Pre vytvorenie novej otázky vyberte jej typ hore";
$MatchesTo = "Zodpovedá";
$CorrectTest = "Opraviť tento test";
$ViewTest = "Prezerať";
$State = "Stav systému";
$NotAttempted = "Bez pokusu";
$AddElem = "+ element";
$DelElem = "- element";
$PlusAnswer = "+ odpoveď";
$LessAnswer = "- odpoveď";
$YourScore = "Vaše skóre";
$Attempted = "Vyskúšané";
$AssignMarks = "Oznámkovať";
$Results = "Výsledky";
$ExerciseStored = "Cvičenie bolo uložené";
$ChooseAtLeastOneCheckbox = "Vyberte najmenej jednu správnu odpoveď";
$ExerciseEdited = "Cvičenie bolo upravené";
$ExerciseDeleted = "Cvičenie bolo zmazané";
$ClickToCommentAndGiveFeedback = "Ak chcete skontrolovať odpoveď a dať spätnú väzbu, kliknite na nasledujúci odkaz";
$OpenQuestionsAttempted = "Študent odpovedal na otvorenú otázku";
$AttemptDetails = "Detaily pokusu";
$TestAttempted = "Pokus absolvovaný";
$StudentName = "Meno študenta";
$StudentEmail = "E-mail študenta";
$OpenQuestionsAttemptedAre = "Otvorená otázka v pokuse je";
$CourseName = "Názov kurzu";
$UploadJpgPicture = "Načítať JPG obrázok";
$HotspotDescription = "Teraz kliknite na : (...)";
$ExamSheetVCC = "List skúšky zobrazil/opravil/komentoval lektor";
$AttemptVCC = "Váš nasledujúci pokus bol prehliadnutý/komentoval/ opravil lektor";
$ClickLinkToViewComment = "Kliknite na odkaz nižšie pre prístup k účtu a zobrazenie komentára skúšky.";
$Regards = "S pozdravom";
$AttemptVCCLong = "Tvoj pokus pre test %s bol zobrazený/komentovaný/opravený lektorom. Kliknite na odkaz nižšie pre prístup k účtu a zobrazenie skúšky.";
$DearStudentEmailIntroduction = "Vážený študent,";
$ExerciseFinished = "Cvičenie je ukončené";
$ResultsEnabled = "Výsledky sprístupnené študentom";
$ResultsDisabled = "Výsledky sú pre študentov zablokované";
$ExportWithUserFields = "Zahrnúť do exportu používateľské polia";
$ExportWithoutUserFields = "Vylúčiť z exportu používateľské polia";
$DisableResults = "Nezobrazovať výsledky študentom";
$EnableResults = "Zobraziť výsledky študentom";
$ValidateAnswer = "Potvrdiť odpovede";
$FillInBlankSwitchable = "Povoliť zmenu poradia odpovedí";
$ReachedMaxAttempts = "Nemôžete spustiť test %s, pretože ste už dosiahli svoj maximálny počet %s pokusov.";
$AdvancedParameters = "Rozšírené parametre";
$RandomQuestionsToDisplay = "Počet zobrazených náhodne vybraných otázok";
$RandomQuestionsHelp = "Počet zobrazených náhodne vybraných otázok; ak chcete mať všetky otázky v správnom poradí, nechajte 0";
$ExerciseAttempts = "Maximálny počet pokusov";
$DoNotRandomize = "Nepoužívať náhodne";
$Infinite = "Nekonečný";
$BackToExercisesList = "Späť na cvičenia";
$ViewScoreChangeHistory = "Prezrieť históriu zmien skóre";
$NoStartDate = "Bez dátumu začiatku";
$NoLogOfDuration = "Žiadny záznam trvania";
$EnableTimeLimits = "Aktivovať časové limity";
$ExeStartTime = "Začiatok";
$ExeEndTime = "Koniec";
$Value = "Hodnota";
$DeleteAttempt = "Zmazať pokus?";
$WithoutComment = "Bez komentára";
$QuantityQuestions = "Počet otázok";
$FilterExercices = "Filtrovať cvičenia";
$FilterByNotRevised = "Len nekvalifikované";
$FilterByRevised = "Len kvalifikované";
$Duration = "Trvanie";
$ReachedTimeLimit = "Časový limit dosiahnutý";
$TryAgain = "Skúste znova";
$SeeTheory = "Odkaz na teóriu";
$EndActivity = "Koniec aktivity";
$NoFeedback = "Skúška (bez spätnej väzby)";
$DirectFeedback = "Samo-hodnotenie (okamžitá spätná väzba)";
$FeedbackType = "Hodnotenie :";
$Scenario = "Scenár";
$VisitUrl = "Prehliadnuť tento odkaz";
$ExitTest = "Ukončiť test";
$DurationFormat = "%1 sekúnd";
$Difficulty = "Obtiažnosť";
$NewScore = "Nové skóre";
$NewComment = "Nový komentár";
$ExerciseNoStartedYet = "Test ešte nezačal";
$ExerciseNoStartedAdmin = "Lektor ešte nedovolil spustiť test";
$SelectTargetLP = "Vybrať cieľové školenie";
$SelectTargetQuestion = "Vybrať cieľovú otázku";
$DirectFeedbackCantModifyTypeQuestion = "Typ testu nemôže byť zmenený, pretože bol nastavený na sebahodnotenie. Sebahodnotenie vám dáva možnosť poskytnúť priamu spätnú väzbu pre používateľa, ale to nie je kompatibilné so všetkými typmi otázok, a preto tento typ kvízu nemôže byť menený.";
$CantShowResults = "Nie je k dispozícií";
$CantViewResults = "Nie je možné zobraziť výsledky";
$ShowCorrectedOnly = "So spätnou väzbou";
$ShowUnCorrectedOnly = "Nespávne výsledky";
$HideResultsToStudents = "Skryť výsledky";
$ShowResultsToStudents = "Zobraziť študentovi skóre";
$ProcedToQuestions = "Pokračovať na otázky";
$AddQuestionToExercise = "Pridať túto otázku do testu";
$PresentationQuestions = "Zobraziť";
$UniqueAnswer = "Jediná správna odpoveď";
$MultipleAnswer = "Viacero odpovedí";
$ReachedOneAttempt = "Nemôžete spustiť tento test, pretože ste už dosiahli jeden pokus";
$QuestionsPerPage = "Otázky na stránku";
$QuestionsPerPageOne = "Jedna";
$QuestionsPerPageAll = "Všetky";
$EditIndividualComment = "Upraviť spätnú väzbu";
$ThankYouForPassingTheTest = "Ďakujeme za absolvovanie testu";
$ExerciseAtTheEndOfTheTest = "Na konci testu";
$EnrichQuestion = "Obohatiť otázku";
$langDefaultUniqueQuestion = "Vybrať rozumné zdvôvodnenie";
$langDefaultUniqueAnswer1 = "A potom B potom C";
$langDefaultUniqueComment1 = "Mlieko je základom mnohých mliečnych výrobkov, ako je maslo, syr, jogurt, okrem iného";
$langDefaultUniqueAnswer2 = "A potom C potom B";
$langDefaultUniqueComment2 = "Ovos patrí medzi naj komplexnejšie obilia. Jeho energia a nutričné ​​vlastnosti boli základom kŕmenia ľudí";
$langDefaultMultipleQuestion = "Marazmus je dôsledkom";
$langDefaultMultipleAnswer1 = "Nedostatok vápnika";
$langDefaultMultipleComment1 = "Vápnik pôsobí ako ...";
$langDefaultMultipleAnswer2 = "Nedostatok vitamínu A";
$langDefaultMultipleComment2 = "Vitamín A je zodpovedný za ...";
$langDefaultFillBlankQuestion = "Spočítajte si Body Mass Index";
$langDefaultMathingQuestion = "Objednať operácie";
$langDefaultOpenQuestion = "Zoznam toho, čo považujete za 10 vrcholných kvalít dobrého projektového manažéra?";
$langMoreHotspotsImage = "Pridať/Upraviť hotspots obrázku";
$ReachedTimeLimitAdmin = "Administrátor dosiahol časový limit";
$LastScoreTest = "Posledné bodové hodnotenie cvičenia";
$BackToResultList = "Späť do zoznamu výsledkov";
$EditingScoreCauseProblemsToExercisesInLP = "Ak upravíte skóre otázky, pamätajte, že toto cvičenie bolo pridané do kurzu";
$SelectExercice = "Vybrať cvičenie";
$YouHaveToSelectATest = "Musíte vybrať test";
$HotspotDelineation = "Hotspot náčrt";
$CreateQuestions = "Vytvoriť otázky";
$MoreOAR = "Viac ohrozených oblastí";
$LessOAR = "Menej ohrozených oblastí";
$LearnerIsInformed = "Táto správa, rovnako ako tabuľka výsledkov, sa objaví študentovi, ak sa mu to tento krok nepodarí";
$MinOverlap = "Minimálny presah";
$MaxExcess = "Maximálny prebytok";
$MaxMissing = "Maximálne chýba";
$IfNoError = "Ak nie je chyba";
$LearnerHasNoMistake = "Študent neurobil žiadnu chybu";
$YourAnswer = "Vaša odpoveď";
$YourDelineation = "Váš náčrt :";
$ResultIs = "Váš výsledok je:";
$Overlap = "Prekrývajúce sa plochy";
$Missing = "Chýbajúca plocha";
$Excess = "Nadmerná oblasť";
$Min = "Minimálne";
$Max = "Maximálne";
$Requirements = "Požiadavky";
$OARHit = "Jeden (alebo viac) nebezpečných oblastí bolo zasiahnutých";
$TooManyIterationsPleaseTryUsingMoreStraightforwardPolygons = "Príliš veľa iterácií pri prepočítavaní vašej odpovede. Skúste prosím nakresliť vaše vymedzenie viac priamočiaro";
$Thresholds = "Prahové hodnoty";
$Delineation = "Náčrt";
$QuestionTypeDoesNotBelongToFeedbackTypeInExercise = "Typ otázky nepatrí do spätnej väzby v type cvičenia";
$XResultsCleaned = "%d vymazaných výsledkov";
$AreYouSureToDeleteResults = "Naozaj chcete odstrániť výsledky";
$ExerciseCopied = "Kopírovať cvičenie";
$AreYouSureToCopy = "Naozaj chcete kopírovať";
$EditingExerciseCauseProblemsInLP = "Upraviť problémy spôsobené cvičením v Učebnej osnove";
$ExerciseWithFeedbackWithoutCorrectionComment = "Poznámka: Tento test bol nastavený tak, aby skryl očakávané odpovede.";
$SessionIsReadOnly = "Stretnutie je iba na čítanie";
$EnableTimerControl = "Povoliť časovú kontrolu";
$ExerciseTotalDurationInMinutes = "Celkové trvanie testu v minútach";
$ToContinueUseMenu = "Ak chcete pokračovať v tomto kurze, prosím použite postrannú ponuku.";
$RandomAnswers = "Náhodné poradie odpovedí";
$NotMarkActivity = "Táto činnosť nemôže byť klasifikovaná";
$YouHaveToCreateAtLeastOneAnswer = "Musíte vytvoriť aspoň jednu odpoveď";
$ExerciseAttempted = "Študent sa pokúsil o cvičenie";
$MultipleSelectCombination = "Presný výber";
$MultipleAnswerCombination = "Kombinácia presných odpovedí";
$ExerciceExpiredTimeMessage = "Čas limit cvičenia uplynul";
$AllQuestionsMustHaveACategory = "Všetky otázky musia mať kategóriu, pre použitie v režime náhodne - podľa jednotlivých kategórií";
$NoMedia = "Nespojené s médiami";
$AttachToMedia = "Pripojiť k médiám";
$ExamModeWithFinalScoreShowOnlyFinalScoreWithCategoriesIfAvailable = "Ukázať iba konečné skóre, s kategóriami ak je k dispozícii";
$Media = "Média";
$ForceEditingExerciseInLPWarning = "Máte oprávnenie upravovať toto cvičenie, aj keď sa už používa v učebnej osnove. Ak ho máte upraviť, pokúste sa vyhnúť zmene skóre a sústrediť sa na obsah, nie na hodnoty, ani kategorizáciu, aby neboli dotknuté výsledky predchádzajúcich používateľov, ktorí robili tento test.";
$CopyExercise = "Skopírovať ako nové cvičenie";
$CleanStudentResults = "Vymazať výsledky všetkých študentov v tomto cvičení";
$ImportQtiQuiz = "Importovať Qti2 cvičenie";
$ReUseACopyInCurrentTest = "Znova použiť kópiu vo vnútri aktuálneho testu";
$Copy = "Kópia";
$QuestionGlobalCategory = "Globálna kategória";
$CheckThatYouHaveEnoughQuestionsInYourCategories = "Uistite sa, že budete mať dosť otázok vo vašich kategóriach.";
$ScoreAverageFromAllAttempts = "Priemerné skóre pre všetky pokusy";
$DefaultContent = "Vytvoriť predvolený obsah";
$OralQuestionsAttemptedAreX = "Pokus o ústne otázky sú %s";
$OralQuestionsAttempted = "Študent sa pokúsil zodpovedať jednu alebo viac ústnych otázok";
$RelativeScore = "Relatívne skóre";
$AbsoluteScore = "Absolútne skóre";
$EditQuestions = "Upraviť otázky";
$ExerciseDescriptionLabel = "Popis";
$ExerciseEditionNotAvailableInSession = "Nemôžete upravovať toto cvičenie kurzu zvnútra stretnutia";
$UniqueAnswerNoOption = "Jedna správna odpoveď s Neviem";
$MultipleAnswerTrueFalse = "Viacero odpovedí Pravda/Nepravda/Neviem";
$MultipleAnswerCombinationTrueFalse = "Kombinácia odpovede Pravda/Nepravda/Neviem";
$DontKnow = "Neviem";
$False = "Nepravda";
$DoubtScore = "Neviem";
$HotSpotDelineation = "Hotspot vymedzenie";
$PropagateNegativeResults = "Šíriť negatívne výsledky medzi otázkami";
$InsertALinkToThisQuestionInTheExercise = "Použiť túto otázku v teste ako odkaz (nie kópia)";
$OnlyShowScore = "Praktický režim: Ukázať iba skóre, podľa kategórie, ak aspoň jedna sa použila";
$ImportExcelQuiz = "Importovať test z Excelu";
$DownloadExcelTemplate = "Stiahnuť Excel šablónu";
$ExerciseWillBeActivatedFromXToY = "Cvičenie bude aktivované od %s do %s";
$EnableStartTime = "Povoliť čas začiatku";
$EnableEndTime = "Povoliť čas konca";
$ExerciseAvailableFromX = "Cvičenie je dostupné od %s";
$ExerciseAvailableUntilX = "Cvičenie je dostupné až %s";
$TestLimitsAdded = "Pridané hranice testov";
$AddLimits = "Pridať hranice";
$Unlimited = "Neohraničený";
$LimitedTime = "Čas ohraničenia";
$LimitedAttempts = "Obmedzené pokusy";
$Times = "Doba";
$Random = "Nahodný";
$ExerciseTimerControlMinutes = "Zapnúť časovú kontrolu cvičenia";
$Numeric = "Číselný";
$Acceptable = "Prijateľný";
$Hotspot = "Hotspot";
$ChangeTheVisibilityOfTheCurrentImage = "Zmeniť viditeľnosť aktuálneho obrázku";
$Steps = "Kroky";
$OriginalValue = "Pôvodná hodnota";
$ChooseAnAnswer = "Vyberte odpoveď";
$ImportExercise = "Importovať cvičenie";
$MultipleChoiceMultipleAnswers = "Viacero možností, viacero odpovedí";
$MultipleChoiceUniqueAnswer = "Viacero možností, jediná správna odpoveď";
$HotPotatoesFiles = "HotPotatoes súbory";
$HotPotatoes = "HotPotatoes";
$OAR = "Oblasť, aby sa zabránilo";
$TotalScoreTooBig = "Celkové skóre je príliš veľké";
$InvalidQuestionType = "Neplatný typ otázky";
$ShowScoreAndRightAnswer = "Automatický skušobný režim: ukázať skóre a očakávané odpovede";
$DoNotShowScoreNorRightAnswer = "Skúšobný režim: Nezobrazovať skóre ani odpovede";
$LoadUsersExtraData = "Načítať ďalšie dáta používateľa";
$StartTest = "Spustiť test";
$SaveForNow = "Uložiť a pokračovať";
$QuestionsToReview = "Prehodnotiť otázky";
$QuestionWithNoAnswer = "Otázky bez odpovedí";
$ValidateAnswers = "Overiť odpoveď";
$ReviewQuestions = "Prehľad vybraných otázok";
$YouTriedToResolveThisExerciseEarlier = "Pokúsili ste sa vyriešiť toto zadanie predčasne";
$ThereAreNoQuestionsForThisExercise = "Nie sú žiadne otázky pre toto cvičenie";
$ContinueTest = "Pokračujte v teste";
$XQuestionsWithTotalScoreY = "Otázok: %d, celkové skóre (všetky otázky) z %s.";
$QuestionLowerCase = "otázka";
$QuestionsLowerCase = "otázky";
$Category = "Kategória";
$BackToTestList = "Späť do testu";
$CategoryDescription = "Popis kategórie";
$BackToCategoryList = "Späť do kategórie";
$AddCategoryNameAlreadyExists = "Názov kategórie už existuje. Použite prosím iný názov.";
$CannotDeleteCategory = "Nie je možné zmazať kategóriu";
$CannotDeleteCategoryError = "Chyba: nemožno odstrániť kategóriu";
$CannotEditCategory = "Nie je možné upraviť kategóriu";
$ModifyCategory = "Zmeniť kategóriu";
$ModifyCategoryError = "Nie je možné aktualizovať kategóriu";
$AllCategories = "Všetky kategórie";
$AllGroups = "Všetky skupiny";
$FilterByGroup = "Filtrovať podľa skupiny";
$CreateQuestionOutsideExercice = "Vytvoriť otázku mimo cvičenia";
$ChoiceQuestionType = "Vyberte typ otázky";
$YesWithCategoriesSorted = "Áno, s usporiadanými kategóriami";
$YesWithCategoriesShuffled = "Áno, so zamiešanými kategóriami";
$ManageAllQuestions = "Spravovať všetky otázky";
$MustBeInATest = "Musí byť v teste";
$PleaseSelectSomeRandomQuestion = "Prosím, vyberte nejakú náhodnú otázku";
$RemoveFromTest = "Odstrániť z testu";
$AddQuestionToTest = "Pridať otázku do testu";
$QuestionByCategory = "Otázka podľa kategórie";
$QuestionUpperCaseFirstLetter = "Otázka";
$QuestionCategory = "Kategória otázok";
$AddACategory = "Pridať kategóriu";
$CategoryName = "Názov kategórie";
$AddTestCategory = "Pridať kategóriu testu";
$AddCategoryDone = "Kategória pridaná";
$NbCategory = "Nb kategórie";
$DeleteCategoryAreYouSure = "Ste si istí, že chcete zmazať túto kategóriu?";
$DeleteCategoryDone = "Kategória zmazaná";
$EditCategory = "Upraviť kategóriu";
$MofidfyCategoryDone = "Kategória aktualizovaná";
$NoCategory = "Žiadna kategória";
$NotInAGroup = "Nie v skupine";
$DoFilter = "Filter";
$ByCategory = "Podľa kategórie";
$ResultsNotRevised = "Výsledky nie sú posúdené";
$ResultNotRevised = "Výsledok nie je posúdený";
$NumberOfStudentsWhoTryTheExercise = "Počet študentov, ktorí skúsili cvičenie";
$LowestScore = "Najnižšie skóre";
$HighestScore = "Najvyššie skóre";
$MaximumScore = "Maximálne skóre";
$NotRevised = "Neposúdené";
$PreviousQuestion = "Predchádzajúca otázka";
$Options = "Možnosti";
$RandomQuestionByCategory = "Náhodne otázky podľa kategórie";
$QuestionDisplayCategoryName = "Zobraziť kategóriu otázok";
$ReviewAnswers = "Prehodnotiť moju odpoveď";
$TextWhenFinished = "Text, ktorý sa objaví na konci testu";
$Validated = "Overené";
$NotValidated = "Neoverené";
$Revised = "Posúdené";
$SelectAQuestionToReview = "Vybrať otázku, ktorú chcete zmeniť";
$ReviewQuestionLater = "Prehodnotiť otázku neskôr";
$NumberStudentWhoSelectedIt = "Počet študentov, ktorí si to vybrali";
$QuestionsAlreadyAnswered = "Otázky sú už zodpovedané";
$StudentsWhoAreTakingTheExerciseRightNow = "Študenti, ktorí práve teraz robia cvičenie";
$ReportByQuestion = "Správa podľa otázky";
$LiveResults = "Živé výsledky";
$RecordAnswer = "Zaznamenať odpoveď";
$UseTheMessageBelowToAddSomeComments = "Použite nižšie uvedenú správu pre pridanie komentára";
$SendRecord = "Poslať záznam";
$DownloadLatestRecord = "Stiahnuť záznam";
$OralExpression = "Ústny prejav";
$CongratulationsYouPassedTheTest = "Gratulujeme vám, test ste urobili!";
$YouDidNotReachTheMinimumScore = "Nedosiahli ste minimálne skóre";
$EndTest = "Koniec testu";
$PassPercentage = "Percento na prejdenie";
$NoCategorySelected = "Nie je vybraná žiadna kategória";
$ExerciseAverage = "Priemer cvičenia";
$NoNegativeScore = "Žiadne záporné skóre";
$GlobalMultipleAnswer = "Globálna viacnásobná odpoveď";
$AllQuestionsShort = "Všetky";
$ProblemsRecordingUploadYourOwnAudioFile = "Problém nahrávanie? Nahrajte si vlastný zvukový súbor.";
?>