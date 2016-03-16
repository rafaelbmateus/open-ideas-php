CREATE TABLE tb_innovation_area (
  innovation_area_id SERIAL  NOT NULL ,
  area_name VARCHAR(255)   NOT NULL ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL      ,
PRIMARY KEY(innovation_area_id));


INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Medicina', now());

INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Nanotecnologia', now());

INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Tecnologia da Informação', now());

INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Energia distribuída', now());

INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Biocombustíveis', now());

INSERT INTO tb_innovation_area(area_name, created_at)
VALUES ('Computação pervasiva', now());

commit;




CREATE TABLE tb_job (
  job_id SERIAL  NOT NULL ,
  job_name VARCHAR(255)   NOT NULL ,
  is_deleted BOOL    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(job_id));


INSERT INTO tb_job(job_name, created_at) VALUES ('corporate', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('student', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('researcher', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('developer', now());

commit;




CREATE TABLE tb_user_type (
  type_id SERIAL  NOT NULL ,
  type_name VARCHAR(255)   NOT NULL ,
  is_deleted BOOL    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(type_id));


INSERT INTO tb_user_type(type_name, created_at) VALUES ('admin', now());
INSERT INTO tb_user_type(type_name, created_at) VALUES ('user', now());

commit;




CREATE TABLE tb_incubator (
  incubator_id SERIAL  NOT NULL ,
  incubator_name VARCHAR(255)   NOT NULL ,
  incubator_description VARCHAR(1200)    ,
  incubator_url VARCHAR(255)    ,
  incubator_phone VARCHAR(255)    ,
  incubator_state VARCHAR(2)    ,
  incubator_city VARCHAR(255)    ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL      ,
PRIMARY KEY(incubator_id));


INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CELTA', 'O Centro Empresarial para Laboração de Tecnologias Avançadas (CELTA) é a incubadora da Fundação CERTI situada em Florianópolis (SC). Foi criado em 1986, como resposta aos anseios de desenvolvimento da capital catarinense e com o objetivo de viabilizar um promissor setor econômico, aproveitando os talentos e o conhecimento gerados pela UFSC. ', 'http://www.celta.org.br/', '048 3239-2222', 'SC', 'Florianópolis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('MIDI Tecnológico', 'A incubadora MIDI Tecnológico, criada no dia 14 de agosto de 1998, tem o Serviço de Apoio às Micro e Pequenas Empresas de Santa Catarina (SEBRAE/SC) como entidade mantenedora e a Associação Catarinense de Empresas de Tecnologia (ACATE) como entidade gestora. Localizada em Florianópolis, abriga empresas incubadas cujos produtos, processos ou serviços são gerados a partir de resultados de pesquisas científicas aplicadas, nos quais a tecnologia e a inovação representam alto valor agregado. O MIDI Tecnológico tem como objetivo prestar serviços de Incubação, para o desenvolvimento de empreendimentos nascentes de base tecnológica, visando a criação de empresas inovadoras e sustentáveis.', 'http://miditecnologico.com.br/', '048 2107-2737', 'SC', 'Florianópolis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CRIE', 'A incubadora do Centro Regional de Inovação e Empreendedorismo (Crie) atua desde 2005 para viabilizar projetos de micro e pequenas empresas. É uma organização civil sem fins lucrativos, com personalidade jurídica de direito privado, com autonomia administrativa e financeira. A partir de suporte técnico, gerencial e infraestrutura, a incubadora Crie contribui para o desenvolvimento regional sustentável oferecendo às empresas nascentes, por baixo custo, espaço e serviços básicos, além de um conjunto de orientações técnicas e gerenciais. O espaço promove ainda a sinergia entre empresas incubadas com instituições de ensino e pesquisa, empresas, órgãos governamentais, associações de classe, agentes e mercado consumidor.', 'http://www.unisul.br/wps/portal/home/pesquisa-e-inovacao/agetec/incubadora-crie', '048 3621-3406', 'SC', 'Florianópolis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('LNCC', '', 'http://www.incubadora.lncc.br/', '024 2233-6232', 'RJ', '', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Santos Dumont', 'A Incubadora Santos Dumont é um espaço que oferece suporte gerencial, facilitando a interação com o meio empresarial, científico, tecnológico e financeiro, visando a sua inserção, crescimento e consolidação no mercado.', 'http://www.pti.org.br/incubadorasantosdumont', '045 3576-7073', 'PR', 'Foz do Iguaçu', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('ITSM', 'As instituições de ensino e de pesquisa tecnológica têm como obrigação primeira acompanhar o processo de inovação e de mudança de paradigmas. A empresa inovadora, forte dependente de novas tecnologias e novos conhecimentos para o sucesso de seus negócios, de certa forma, também é dependente dos esforços despendidos pelo corpo de pesquisadores das instituições, para ver suas aspirações contempladas.', 'http://coral.ufsm.br/itsm/', '055 3220-8836', 'RS', 'Santa Maria', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Instituto GENE', 'O Instituto Gene é uma associação civil sem fins lucrativos que tem como objetivo promover o desenvolvimento multissetorial por meio do estímulo e suporte à inovação e ao empreendedorismo. Atualmente, vem atuando diretamente no apoio a geração de empresas inovadoras, por meio da Incubadora de Empresas e, subsequentemente, captação de recursos por meio de projetos.', 'http://www.institutogene.org.br/', '047 3321-7870', 'SC', 'Blumenau', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('RAIAR', 'A RAIAR – Incubadora de Empresas da PUCRS tem como propósito estimular e operacionalizar a visão empreendedora da comunidade PUCRS. Por meio do Programa de Incubação e do Startup Garagem, a Raiar apoia projetos de negócio, dando suporte em assessorias e infraestrutura, transformando-os em empreendimentos competitivos e prontos para atuarem no mercado. Saiba mais sobre a Raiar', 'http://www3.pucrs.br/portal/page/portal/inovapucrs/Capa/raiar', '051 3320-3673', 'RS', 'Porto Alegre', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Softville', 'É uma Fundação de caráter técnico científico, com personalidade jurídica de direito privado, sem fins lucrativos. Missão: Proporcionar o apoio necessário para o desenvolvimento de empresas de Base Tecnológica, contribuindo para o seu amadurecimento e consequente sucesso rumo ao mercado globalizado.', 'http://www.softville.org.br/', '047 3431-7300', 'SC', 'Joinville', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('EDUCERE', 'A Fundação Educere é um Centro de Pesquisas e Desenvolvimento na área de biotecnologia, cujo foco principal é a incubação de empresas a partir de um projeto social inovador que atua na formação de jovens com potencial empreendedor.', 'http://www.educere.org.br/', '', 'PR', 'Campo Mourão', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIETEC', 'Cietec é uma associação civil sem fins lucrativos de direito privado estabelecida com a missão de promover o Empreendedorismo Inovador, incentivando a transformação do conhecimento em produtos e serviços de valor agregado para o mercado.', 'http://www.cietec.org.br/', '011 3039-8300', 'SP', 'Cidade Universitária de São Paulo', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Mackenzie', 'A incubadora de empresas do Mackenzie é um ambiente de fomento e apoio ao desenvolvimento de novas empresas inovadoras - de prestação de serviços, de base tecnológica ou de manufaturas leves - oferecendo suporte técnico, gerencial e formação complementar ao empreendedor.', 'http://www.mackenzie.br/', '011 2114-8074', 'SP', 'Vila Buarque', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIATEC', 'A CIATEC participa ativamente no planejamento e na execução da política de ciência e tecnologia da administração pública das diversas esferas governamentais especialmente a municipal. Através de sua Incubadora de Empresas de Base Tecnológica, auxilia no surgimento e na evolução de empreendimentos geradores de novas tecnologias, ajudando a consolidar Campinas como uma das referências no mundo.', 'http://www.ciatec.org.br/', '019 3756-5433', 'SP', 'Campinas', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('INCAMP', 'A Incubadora de Empresas de Base Tecnológica da Unicamp (INCAMP), fundada em 2001 e administrada pela Agência de Inovação Inova Unicamp, é o ambiente ideal para que projetos tecnológicos virem verdadeiros negócios. Além do espaço físico, proporciona todo o suporte necessário para que essas empresas cheguem ao mercado e se tornem empreendimentos de sucesso, por meio de reuniões e mentorias com especialistas e profissionais do ecossistema de empreendedorismo e inovação, eventos, palestras e encontros com investidores.', 'http://www.inova.unicamp.br/', '019 3521-5203', 'SP', 'Campinas', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIDE', 'O Centro de Incubação e Desenvolvimento Empresarial – CIDE, tem a missão de estruturar a criação e o desenvolvimento de empresas inovadoras de base tecnológica com ênfase nos setores de biotecnologia, tecnologia da informação e eletrônica, através de ações que contribuam para incentivar o empreendedor e o desenvolvimento socioeconômico do Estado. Para atingir sua finalidades o CIDE utiliza o sistema de incubação de empresas, fazendo “ponte” entre o mercado e o desenvolvimento tecnológico, respeitando as características próprias da região.', 'http://cide.org.br/', '', 'AM', 'Manaus', now());

commit;




CREATE TABLE tb_user (
  user_id SERIAL  NOT NULL ,
  job_id INTEGER   NOT NULL ,
  type_id INTEGER   NOT NULL ,
  user_email VARCHAR(255)   NOT NULL ,
  user_password VARCHAR(45)   NOT NULL ,
  user_name VARCHAR(45)   NOT NULL ,
  user_document INTEGER    ,
  user_resume VARCHAR(500)    ,
  is_deleted BOOL    ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(user_id)    ,
  FOREIGN KEY(type_id)
    REFERENCES tb_user_type(type_id),
  FOREIGN KEY(job_id)
    REFERENCES tb_job(job_id));


CREATE INDEX tb_user_FKIndex1 ON tb_user (type_id);
CREATE INDEX tb_user_FKIndex2 ON tb_user (job_id);


CREATE INDEX IFK_Rel_16 ON tb_user (type_id);
CREATE INDEX IFK_Rel_17 ON tb_user (job_id);


CREATE TABLE tb_challenge (
  challenge_id SERIAL  NOT NULL ,
  area_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  challenge_title VARCHAR(80)   NOT NULL ,
  challenge_description VARCHAR(1200)    ,
  challenge_deadline DATE    ,
  created_at VARCHAR(255)   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL    ,
  challenge_attachment VARCHAR(255)      ,
PRIMARY KEY(challenge_id)    ,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(area_id)
    REFERENCES tb_innovation_area(innovation_area_id));


CREATE INDEX tb_challenge_FKIndex1 ON tb_challenge (user_id);
CREATE INDEX tb_challenge_FKIndex2 ON tb_challenge (area_id);


CREATE INDEX IFK_Rel_18 ON tb_challenge (user_id);
CREATE INDEX IFK_Rel_21 ON tb_challenge (area_id);


CREATE TABLE tb_idea (
  idea_id SERIAL  NOT NULL ,
  area_id INTEGER   NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_is_public BOOL    ,
  idea_title VARCHAR(80)   NOT NULL ,
  idea_description VARCHAR(1200)   NOT NULL ,
  idea_solution VARCHAR(1200)    ,
  idea_differential VARCHAR(1200)    ,
  idea_necessary_skills VARCHAR(500)    ,
  idea_target_group VARCHAR(80)    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL    ,
  idea_attachment VARCHAR(255)      ,
PRIMARY KEY(idea_id)      ,
  FOREIGN KEY(area_id)
    REFERENCES tb_innovation_area(innovation_area_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_idea_FKIndex1 ON tb_idea (area_id);
CREATE INDEX tb_idea_FKIndex2 ON tb_idea (user_id);
CREATE INDEX tb_idea_FKIndex3 ON tb_idea (challenge_id);


CREATE INDEX IFK_Rel_02 ON tb_idea (area_id);
CREATE INDEX IFK_Rel_03 ON tb_idea (user_id);
CREATE INDEX IFK_Rel_11 ON tb_idea (challenge_id);


CREATE TABLE tb_comment (
  comment_id SERIAL  NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_id INTEGER    ,
  comment_description INTEGER    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(comment_id)      ,
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_comment_FKIndex1 ON tb_comment (idea_id);
CREATE INDEX tb_comment_FKIndex2 ON tb_comment (user_id);
CREATE INDEX tb_comment_FKIndex3 ON tb_comment (challenge_id);


CREATE INDEX IFK_Rel_09 ON tb_comment (idea_id);
CREATE INDEX IFK_Rel_10 ON tb_comment (user_id);
CREATE INDEX IFK_Rel_19 ON tb_comment (challenge_id);


CREATE TABLE tb_like (
  like_idea_id SERIAL  NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_id INTEGER    ,
  created_at TIMESTAMP   NOT NULL   ,
PRIMARY KEY(like_idea_id)      ,
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_like_idea_FKIndex1 ON tb_like (idea_id);
CREATE INDEX tb_like_idea_FKIndex2 ON tb_like (user_id);
CREATE INDEX tb_like_FKIndex3 ON tb_like (challenge_id);


CREATE INDEX IFK_Rel_01 ON tb_like (idea_id);
CREATE INDEX IFK_Rel_07 ON tb_like (user_id);
CREATE INDEX IFK_Rel_20 ON tb_like (challenge_id);


CREATE TABLE tb_notification (
  notification_id SERIAL  NOT NULL ,
  user_id INTEGER   NOT NULL ,
  notification_message VARCHAR(255)    ,
  notification_is_read BOOL    ,
  created_at TIMESTAMP   NOT NULL   ,
PRIMARY KEY(notification_id)  ,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id));


CREATE INDEX tb_notification_FKIndex1 ON tb_notification (user_id);


CREATE INDEX IFK_Rel_08 ON tb_notification (user_id);
