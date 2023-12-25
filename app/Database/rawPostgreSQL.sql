-- CREATE COMPANIES DATA --
CREATE TABLE IF NOT EXISTS "companies" (
	"id" BIGINT NOT NULL DEFAULT 'nextval(''companies_id_seq''::regclass)',
	"name" VARCHAR(255) NOT NULL,
	"VAT_number" VARCHAR(255) NOT NULL,
	"address" VARCHAR(255) NOT NULL,
	"created_at" TIMESTAMP NULL DEFAULT NULL,
	"updated_at" TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY ("id"),
	UNIQUE INDEX "companies_vat_number_unique" ("VAT_number")
);

-- CREATE CONTRACTS TABLE --
CREATE TABLE IF NOT EXISTS "contracts" (
	"id" BIGINT NOT NULL DEFAULT 'nextval(''contracts_id_seq''::regclass)',
	"codeES" VARCHAR(255) NOT NULL,
	"year" VARCHAR(255) NOT NULL,
	"model_number" INTEGER NOT NULL,
	"StApp" VARCHAR(255) NOT NULL,
	"CIG" VARCHAR(255) NOT NULL,
	"NrAtto" INTEGER NOT NULL,
	"contract_value" VARCHAR(255) NOT NULL,
	"annualities" VARCHAR(255) NOT NULL,
	"installment_years" VARCHAR(255) NOT NULL,
	"sceltaContraente" VARCHAR(255) NOT NULL,
	"company_id" BIGINT NOT NULL,
	"created_at" TIMESTAMP NULL DEFAULT NULL,
	"updated_at" TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY ("id"),
	UNIQUE INDEX "contracts_codees_unique" ("codeES"),
	UNIQUE INDEX "contracts_model_number_unique" ("model_number"),
	UNIQUE INDEX "contracts_cig_unique" ("CIG"),
	UNIQUE INDEX "contracts_nratto_unique" ("NrAtto"),
	CONSTRAINT "contracts_company_id_foreign" FOREIGN KEY ("company_id") REFERENCES "companies" ("id") ON UPDATE NO ACTION ON DELETE CASCADE
);

-- CREATE FUNDING DATA TABLE --
CREATE TABLE IF NOT EXISTS "funding_data" (
	"id" BIGINT NOT NULL DEFAULT 'nextval(''funding_data_id_seq''::regclass)',
	"VSP" VARCHAR(255) NOT NULL,
	"OP" VARCHAR(255) NOT NULL,
	"model_number" INTEGER NOT NULL,
	"total_amount" VARCHAR(255) NOT NULL,
	"allocation" VARCHAR(255) NOT NULL,
	"created_at" TIMESTAMP NULL DEFAULT NULL,
	"updated_at" TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY ("id"),
	UNIQUE INDEX "funding_data_model_number_unique" ("model_number")
);

-- CREATE PAYMENTS TABLE --
CREATE TABLE IF NOT EXISTS "payment_details" (
	"id" BIGINT NOT NULL DEFAULT 'nextval(''payment_details_id_seq''::regclass)',
	"company" BIGINT NOT NULL,
	"contract_NrAtto" BIGINT NOT NULL,
	"funding_model_number" BIGINT NOT NULL,
	"created_at" TIMESTAMP NULL DEFAULT NULL,
	"updated_at" TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY ("id"),
	CONSTRAINT "payment_details_company_foreign" FOREIGN KEY ("company") REFERENCES "companies" ("id") ON UPDATE NO ACTION ON DELETE CASCADE,
	CONSTRAINT "payment_details_contract_nratto_foreign" FOREIGN KEY ("contract_NrAtto") REFERENCES "contracts" ("NrAtto") ON UPDATE NO ACTION ON DELETE CASCADE,
	CONSTRAINT "payment_details_funding_model_number_foreign" FOREIGN KEY ("funding_model_number") REFERENCES "funding_data" ("model_number") ON UPDATE NO ACTION ON DELETE CASCADE
);

-- CREATE USERS TABLE --
CREATE TABLE IF NOT EXISTS "users" (
    "id" BIGINT NOT NULL,
    "username" VARCHAR(100),
    "email" VARCHAR(100),
    "role" VARCHAR(100),
    "password" VARCHAR(255),
    "created_at" TIMESTAMP NULL,
    "updated_at" TIMESTAMP NULL,
    "deleted_at" TIMESTAMP NULL,
    PRIMARY KEY ("id"),
);