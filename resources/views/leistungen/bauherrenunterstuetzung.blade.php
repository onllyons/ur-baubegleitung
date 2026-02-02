@extends('layouts.app')

@section('title', 'Bauherrenunterstuetzung | UR Baubegleitung')
@section('meta_description', 'Bauherrenunterstuetzung durch die UR Baubegleitung.')

@section('content')
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Leistungen</p>
            <h1 class="mt-3 text-3xl font-semibold text-slate-900 sm:text-4xl">Bauherrenunterst&uuml;tzung</h1>
            <div class="mt-4 h-1 w-16 rounded-full bg-[#5d7f95]"></div>
        </div>
    </section>

    <section class="bg-white">
        <img
            src="https://static.wixstatic.com/media/46aad9_ab4415c5119c4c45a43f41a1405996c0~mv2.jpg/v1/fill/w_1850,h_870,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Bild-Bauherren.jpg"
            alt="Bauherrenunterstuetzung"
            class="h-[360px] w-full object-cover sm:h-[480px] lg:h-[560px]"
            loading="lazy"
        >
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="grid gap-10 lg:grid-cols-[1.05fr,1.45fr] lg:items-start">
                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Bauherrenvertretung</p>
                        <h2 class="mt-3 text-xl font-semibold text-slate-900">Bauherrenvertretung / Bauherrenunterst&uuml;tzung</h2>
                        <p class="mt-4 text-sm leading-relaxed text-slate-700">
                            Als Bauherrenvertreter im Norddeutschen Raum Raum fungiere ich als unabh&auml;ngiges und vorausschauendes
                            Bindeglied zwischen Bauherrschaft und Projektbeteiligten.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#5d7f95]">Leistungsbild</p>
                        <ul class="mt-4 space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Pr&uuml;fung von Planung, Projektleitung und ausf&uuml;hrenden Gewerken
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Transparente Kommunikation von G&uuml;te, Kosten&auml;nderungen und Rechnungen
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Unabh&auml;ngige Entscheidungsgrundlagen und Qualit&auml;tskontrolle
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-8 text-sm leading-relaxed text-slate-700 sm:text-base">
                    <div class="space-y-4">
                        <p>
                            Dabei pr&uuml;fe ich die Planung, die Projektleitung sowie die Leistungen der ausf&uuml;hrenden
                            Gewerke &ndash; stets mit dem Ziel, Kosten, Qualit&auml;t und Termine im Sinne des Bauherrn sicherzustellen.
                        </p>
                        <p>
                            Der Auftraggeber bleibt aktiv am Baufortschritt beteiligt: G&uuml;te&uuml;berwachung,
                            Kosten&auml;nderungen und Rechnungspr&uuml;fungen werden transparent kommuniziert und mit Ihnen abgestimmt.
                            Auf diese Weise schaffen wir Klarheit und Sicherheit in allen Phasen Ihres Bauvorhabens.
                        </p>
                        <p>
                            Als Ihr Bauberater biete ich professionelle Unterst&uuml;tzung und Begleitung &ndash; auch dann,
                            wenn ein Generalunternehmer oder Allround-Dienstleister alle Arbeiten ausf&uuml;hrt. Durch die
                            unabh&auml;ngige Bauherrenvertretung profitieren Sie von klaren Entscheidungsgrundlagen, einem
                            reibungslosen Bauablauf sowie einer sp&uuml;rbaren Optimierung von Kostenkontrolle und Qualit&auml;tsstandard.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-slate-900">Bauabnahme</h3>
                        <p class="mt-3">
                            Die Abnahme vertraglich vereinbarter Bauleistungen ist ein bedeutender Rechtsakt mit weitreichenden
                            Folgen: Gefahren&uuml;bergang, Gew&auml;hrleistung und Beweislastumkehr treten unmittelbar in Kraft.
                            Damit Sie hier keine Risiken eingehen, unterst&uuml;tze ich Sie mit fachlicher Expertise.
                        </p>
                        <p class="mt-4 font-semibold text-slate-900">Ich &uuml;bernehme f&uuml;r Sie</p>
                        <ul class="mt-3 space-y-2 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Teilabnahmen &ndash; Pr&uuml;fung einzelner Gewerke oder Bauabschnitte (z. B. Rohbau, Dachstuhl, Elektroinstallation)
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Zwischenabnahmen &ndash; regelm&auml;&szlig;ige Kontrollen zwischen den Bauphasen
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Endabnahmen &ndash; Sicherstellung, dass die vereinbarten Leistungen m&auml;ngelfrei und nach Stand der Technik umgesetzt wurden
                            </li>
                        </ul>
                        <p class="mt-4">
                            Auch wenn ich nicht in allen Phasen eingebunden war, biete ich die M&ouml;glichkeit einer Nachabnahme,
                            um bestehende M&auml;ngel oder Risiken rechtzeitig zu erkennen.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Baubegleitende Qualit&auml;tskontrolle</h3>
                        <p>
                            Um sich vor teuren Bausch&auml;den zu sch&uuml;tzen, ist eine neutrale &Uuml;berwachung durch einen
                            unabh&auml;ngigen Sachverst&auml;ndigen unerlässlich. Denn unerkannte Ausf&uuml;hrungsfehler k&ouml;nnen
                            gravierende Folgen haben und die Lebensdauer Ihrer Immobilie erheblich verk&uuml;rzen.
                        </p>
                        <p>
                            Mit meiner baubegleitenden Qualit&auml;tskontrolle werden potenzielle M&auml;ngel bereits w&auml;hrend
                            der Bauphase entdeckt und vermieden. So lassen sich Nachbesserungen fr&uuml;hzeitig einleiten,
                            bevor kostenintensive Sch&auml;den entstehen.
                        </p>
                        <p>
                            Der Umfang der Kontrollen wird im Vorfeld individuell mit Ihnen abgestimmt. Sollten zus&auml;tzliche
                            Pr&uuml;fungen erforderlich werden, schlage ich als Baugutachter die notwendigen Schritte vor &ndash;
                            selbstverst&auml;ndlich ausschlie&szlig;lich nach Ihrer Zustimmung.
                        </p>
                        <p>
                            Auf diese Weise sichern Sie nicht nur einen reibungslosen Bauablauf, sondern stellen auch eine
                            langlebige und hochwertige Bausubstanz sicher.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="text-lg font-semibold text-slate-900">Sinnvolle Kontrollen</h3>
                        <ul class="mt-4 space-y-2 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Bei Erstellung des Kellers &ndash; Bauwerksabdichtung, D&auml;mmung
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Abnahme des Rohbaus &ndash; &Uuml;berg&auml;nge von Bauteil&ouml;ffnungen, &Uuml;berbindema&szlig;e, Bauteilanschl&uuml;sse, Dachstuhl etc.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Nach Einbau der Fenster
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                D&auml;mm- und Abdichtungsarbeiten &ndash; Dach und Fassade
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-2 h-2 w-2 rounded-full bg-[#5d7f95]"></span>
                                Nach Verlegung der Hausinstallationen etc.
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-slate-900">Bausubstanzuntersuchung</h3>
                        <p>
                            Bei jeglicher Planung von Sanierungsarbeiten und auch beim Kauf einer Immobilie in Berlin weglassen ist eine
                            ausf&uuml;hrliche Erforschung der aktuellen Substanz unabdingbar, andernfalls k&ouml;nnen Risiken,
                            die typischerweise alten Geb&auml;uden eigen sind, unangenehme Folgen haben. Die genaue Analyse des
                            Ist-Zustandes kann Ihnen Qualit&auml;ten und M&auml;ngel der Immobilie aufzeigen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
