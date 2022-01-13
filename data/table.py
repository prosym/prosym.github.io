#!/usr/bin/env python3
import json
import re
import sys

NAME_WITH_AFFILIATION = re.compile("(.+)\((.+)\)")

f = None
year = 0

for newline in iter(sys.stdin.readline, ""):
    line = newline.rstrip("\r\n")
    e = json.loads(line)
    if e['type'] == 'symposium':
        # f = open("{0}.tsv".format(e['index']), mode='w')
        f = sys.stdout
        year = e['year']
        symposium = e['index']
        book_type = e['book_type']
        if e['book_title_separator'] == "en-dash":
            book_title_separator = "\u2013"
        elif e['book_title_separator'] == "em-dash":
            book_title_separator = "\u2014"
        elif e['book_title_separator'] == "dot":
            book_title_separator = "\u30fb"
        else:
            raise 'Invalid'
        if 'first_date' in e:
            first_date = e['first_date'].replace('-', '/')
        else:
            first_date = e['year'] + "/01"
        print("文献種類\t論文タイトル\t言語\tキーワード\t公開日\t論文タイトル英語\tその他タイトル\t著者所属\t著者所属英語\t著者名\t著者名英語\t論文抄録\t論文抄録英語\t研究会名\tファイル名\tファイル公開日\t非会員価格\t会員価格\tライセンス表記\t書誌レコードID\t雑誌名\t巻\t号\t開始ページ\t終了ページ\t発行年月日", file=f)
    elif e['type'] == 'presentation':
        authors_list = []
        affiliations_list = []
        if 'authors' in e:
            for author in e['authors']:
                if 'name' in author:
                    authors_list.append(author['name'])
                if 'affiliation' in author:
                    affiliations_list.append(author['affiliation'])
        if len(affiliations_list) > 0 and len(authors_list) != len(affiliations_list):
            raise 'Invalid'
        if 'first_page' in e:
            first_page = e['first_page']
        else:
            first_page = ""
        if 'last_page' in e:
            last_page = e['last_page']
        else:
            last_page = ""
        print("Symposium\t{subject}\tJa\t\t{published_date}\t{title_en}\t{title_other}\t{affiliation_ja}\t{affiliation_en}\t{author_ja}\t{author_en}\t{abstract_ja}\t{abstract_en}\t{sig_name}\t{filename}\t{file_published_date}\t{price_non_member}\t{price_member}\t{license}\t{record_id}\t{magazine}\t{volume}\t{number}\t{first_page}\t{last_page}\t{issue_date}".format(
            subject=e['subject'],
            published_date=first_date,
            title_en="",
            title_other="",
            affiliation_ja=";;".join(affiliations_list),
            affiliation_en="",
            author_ja=";;".join(authors_list),
            author_en="",
            abstract_ja="",
            abstract_en="",
            sig_name="",
            filename=e['filename'],
            file_published_date=first_date,
            price_non_member="0",
            price_member="IPSJ:学会員,0|DLIB:会員,0",
            license="",
            record_id="",
            magazine="第{}回プログラミング{}シンポジウム{}".format(symposium, book_title_separator, book_type),
            volume=year,
            number="",
            first_page=first_page,
            last_page=last_page,
            issue_date=first_date,
        ), file=f)
    elif e['type'] == 'session':
        pass
    else:
        print("???")
